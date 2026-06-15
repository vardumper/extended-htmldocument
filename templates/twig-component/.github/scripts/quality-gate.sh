#!/usr/bin/env bash

set -u

START_TIME=$(date +%s)

TIME_COMMANDS=${TIME_COMMANDS:-false}
RUN() { if [ "$TIME_COMMANDS" = "true" ]; then time "$@"; else "$@"; fi; }

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[0;33m'
NC='\033[0m'

PASS=true

printf "Committing as ${YELLOW}$(git config user.name || true) ${NC}/ ${YELLOW}$(git config user.email || true)${NC}\n"

CHANGED_FILES=${CHANGED_FILES:-}

if [ -z "$CHANGED_FILES" ]; then
	CHANGED_FILES=$(git diff --name-only HEAD~1 HEAD -- '*.php' | grep -v '^demos/vendor/' || true)
fi

CHANGED_FILES=$(printf '%s\n' "$CHANGED_FILES" | sed '/^$/d' || true)

PHP_SWISSKNIFE="./vendor/bin/swiss-knife"
HAS_PHP_SWISSKNIFE=false
if [ -x "$PHP_SWISSKNIFE" ]; then
	HAS_PHP_SWISSKNIFE=true
fi

printf "${YELLOW}Rector Swiss Knife${NC}\n"
if [ "$HAS_PHP_SWISSKNIFE" = "true" ]; then
	RUN composer run swiss-knife-check-conflicts
	ret_code=$?
	if [ "$ret_code" -eq 1 ]; then
		PASS=false
	fi

	RUN composer run swiss-knife-check-commented-code
	ret_code=$?
	if [ "$ret_code" -eq 1 ]; then
		PASS=false
	fi
else
	printf "\nrector/swiss-knife is required. Install it:\n\n composer require --dev rector/swiss-knife\n\n"
fi

if [ "$PASS" != "true" ]; then
	printf "pre commit hook ${RED}FAILED${NC}\n"
	exit 1
fi

PHP_ECS="./vendor/bin/ecs"
HAS_PHP_ECS=false
if [ -x "$PHP_ECS" ]; then
	HAS_PHP_ECS=true
fi

printf "${YELLOW}Easy Coding Standard${NC}\n"
if [ "$HAS_PHP_ECS" = "true" ]; then
	FILES=$(printf '%s\n' "$CHANGED_FILES" | grep '\.php$' | grep -v '^demos/vendor/' | tr '\n' ' ' | xargs || true)

	if [ -z "$FILES" ]; then
		printf "\nNo PHP file in this change set. Skipping ECS.\n"
	else
		RUN composer run fix-cs -- $FILES
		ret_code=$?
		if [ "$ret_code" -ne 0 ]; then
			PASS=false
		fi
	fi
else
	printf "\neasy-coding-standard & php-cs-fixer are required. Install them:\n\n  composer require --dev symplify/easy-coding-standard friendsofphp/php-cs-fixer\n\n"
fi

HAS_PHPSTAN=false
PHPSTAN="./vendor/bin/phpstan"
if [ -x "$PHPSTAN" ]; then
	HAS_PHPSTAN=true
fi

printf "${YELLOW}PHPStan${NC}\n"
if [ "$HAS_PHPSTAN" = "true" ]; then
	if [ -z "$CHANGED_FILES" ]; then
		printf "\nNo PHP file in this change set. Skipping PHPStan.\n"
	else
		PHPSTAN_FILES=$(printf '%s\n' "$CHANGED_FILES" | grep -v '^vendor/' | grep -v '^tests/' | grep -v '^flex/' | grep -v '^demos/vendor/' | sed '/^$/d' | tr '\n' ' ' | xargs || true)

		if [ -z "$PHPSTAN_FILES" ]; then
			printf "\nNo analysable PHP files in this change set. Skipping PHPStan.\n"
		elif RUN "$PHPSTAN" analyse -c ./phpstan.neon --ansi --memory-limit=1G $PHPSTAN_FILES; then
			printf "${GREEN}PHPStan passed${NC}\n"
		else
			PASS=false
		fi
	fi
else
	printf "\nphpstan is required. Install it with:\n\n composer req --dev phpstan/phpstan\n\n"
fi

HAS_PHPMD=false
PHPMD="./vendor/bin/phpmd"
if [ -x "$PHPMD" ]; then
	HAS_PHPMD=true
fi

run_phpmd() {
	RUN php -d error_reporting='E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED' "$PHPMD" "$1" text phpmd.xml
}

if [ "$HAS_PHPMD" = "true" ]; then
	STAGED_PHP_FILES=$(printf '%s\n' "$CHANGED_FILES" | grep '\.php$' | grep -v '^demos/vendor/' | tr '\n' ',' | sed 's/,$//' || true)

	if [ -z "$STAGED_PHP_FILES" ]; then
		printf "${YELLOW}PHP Mess Detector${NC} — no PHP files in this change set, skipping.\n"
	else
		printf "${YELLOW}PHP Mess Detector${NC}\n"

		run_phpmd "$STAGED_PHP_FILES"
		if [ $? -eq 0 ]; then
			printf "${GREEN}PASSED${NC}\n"
		else
			printf "${RED}FAILED${NC}\n"
			PASS=false
		fi
	fi
else
	printf "\nphpmd is required. Install it with:\n\n  composer require --dev phpmd/phpmd\n\n"
fi

printf "${YELLOW}Composer Lockfile${NC}\n"
RUN composer validate --no-check-all --no-check-publish
ret_code=$?
if [ "$ret_code" -eq 0 ]; then
	printf "${GREEN}Composer validation passed${NC}\n"
else
	printf "${RED}Composer validation failed${NC}\n"
	PASS=false
fi

printf "${YELLOW}Composer Audit${NC}\n"
RUN composer audit --abandoned=report
ret_code=$?
if [ "$ret_code" -eq 0 ]; then
	printf "${GREEN}Composer audit passed${NC}\n"
else
	printf "${RED}Composer audit failed${NC}\n"
fi

HAS_PEST=false
PEST="./vendor/bin/pest"
if [ -x "$PEST" ]; then
	HAS_PEST=true
fi

printf "${YELLOW}Pest Unit Tests${NC}\n"
if [ "$HAS_PEST" = "true" ]; then
	if [ -z "$CHANGED_FILES" ]; then
		printf "\nNo PHP file in this change set. Skipping Pest and Clover refresh.\n"
	elif [ ! -d tests/Unit ]; then
		printf "\nNo tests/Unit directory found. Skipping Pest and Clover refresh.\n"
	else
		if RUN "$PEST" tests/Unit --exclude-group=benchmark --exclude-group=external-bin --testdox --colors=always; then
			printf "${GREEN}Unit tests passed${NC}\n"

			if RUN composer run test:coverage:unit; then
				printf "${GREEN}Clover coverage updated${NC}\n"
			else
				printf "${RED}Coverage generation failed${NC}\n"
				PASS=false
			fi
		else
			PASS=false
		fi
	fi
else
	printf "\npest is required. Install it with:\n\n composer require --dev pestphp/pest\n\n"
fi

END_TIME=$(date +%s)
DURATION=$((END_TIME - START_TIME))

if [ "$PASS" != "true" ]; then
	printf "pre commit hook ${RED}FAILED${NC}. Took ${YELLOW}${DURATION}${NC} seconds\n"
	exit 1
fi

printf "pre commit hook ${GREEN}SUCCEEDED${NC}. Took ${YELLOW}${DURATION}${NC} seconds\n"
exit 0

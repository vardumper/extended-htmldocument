HAS_PHPMD=false
PHPMD="./vendor/bin/phpmd"
if [ -x $PHPMD ]; then
    HAS_PHPMD=true
fi

HAS_XSLT=true
if ! command -v xsltproc &> /dev/null
then
    HAS_XSLT=false
fi

if $HAS_XSLT; then
  if $HAS_PHPMD; then
    DIR="./tmp"
    if [ ! -d "$DIR" ]; then
        mkdir -p "$DIR"
    fi
    printf "${YELLOW}PHP Mess Detector${NC}\n"
    rm ./docs/phpmd.md
    cat << EOF > ./docs/phpmd.md
---
layout: home
---
# PHP Mess Detector Report

[[toc]]
EOF
    printf "Searching for unused code... "
    $PHPMD ./src xml unusedcode --report-file=$DIR/unusedcode.xml 2>/dev/null
    PHPMD_EXIT=$?
    if [ $PHPMD_EXIT -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      if [ -s "$DIR/unusedcode.xml" ]; then
        cat << EOF >> ./docs/phpmd.md
## Unused Code
$(xsltproc ./phpmd.xsl $DIR/unusedcode.xml)
EOF
      fi
      #xsltproc phpmd.xsl tmp/unusedcode.xml >> docs/phpmd.md
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi

    printf "Checking code size rule... "
    $PHPMD ./src xml codesize --report-file=$DIR/codesize.xml 2>/dev/null
    PHPMD_EXIT=$?
    if [ $PHPMD_EXIT -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      if [ -s "$DIR/codesize.xml" ]; then
        cat << EOF >> ./docs/phpmd.md
## Code Size
$(xsltproc ./phpmd.xsl $DIR/codesize.xml)
EOF
      fi
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi

    printf "Checking cleancode rule... "
    $PHPMD ./src xml cleancode --report-file=$DIR/cleancode.xml 2>/dev/null
    PHPMD_EXIT=$?
    if [ $PHPMD_EXIT -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      if [ -s "$DIR/cleancode.xml" ]; then
        cat << EOF >> ./docs/phpmd.md
## Clean Code
$(xsltproc ./phpmd.xsl $DIR/cleancode.xml)
EOF
      fi
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi

    printf "Checking code design... "
    $PHPMD ./src xml design --report-file=$DIR/design.xml 2>/dev/null
    PHPMD_EXIT=$?
    if [ $PHPMD_EXIT -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      if [ -s "$DIR/design.xml" ]; then
        cat << EOF >> ./docs/phpmd.md
## Design
$(xsltproc ./phpmd.xsl $DIR/design.xml)

$(date)
EOF
      fi
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi
    rm -rf "$DIR"
    git add ./docs/phpmd.md
    printf "Report generation completed.\n"
  else
    printf "\nphpmd is required. Install it with:\n\n  composer require --dev phpmd/phpmd\n\n"
  fi
else
  printf "\nxsltproc is required. Install it with:\n\n  sudo apt-get install xsltproc (Linux) or brew install libxslt (macOS) \n\n"
fi

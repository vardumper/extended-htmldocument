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
    DIR="tmp"
    if [ ! -d "$DIR" ]; then
        mkdir -p "$DIR"
    fi
    printf "${YELLOW}PHP Mess Detector${NC}\n"
    rm docs/phpmd.md
    cat << EOF > docs/phpmd.md
---
layout: home
---
# PHP Mess Detector Report

[[toc]]
EOF
    printf "Searching for unused code... "
    PHPMD_OUTPUT=$($PHPMD ./src xml unusedcode --report-file=tmp/unusedcode.xml   2>&1)
    if [ $? -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      cat << EOF >> docs/phpmd.md
## Unused Code
$(xsltproc phpmd.xsl tmp/unusedcode.xml)
EOF
      #xsltproc phpmd.xsl tmp/unusedcode.xml >> docs/phpmd.md
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi

    printf "Checking code size rule... "
    PHPMD_OUTPUT=$($PHPMD ./src xml codesize --report-file=tmp/codesize.xml  2>&1)
    if [ $? -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      cat << EOF >> docs/phpmd.md
## Code Size
$(xsltproc phpmd.xsl tmp/codesize.xml)
EOF
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi

    printf "Checking cleancode rule... "
    PHPMD_OUTPUT=$($PHPMD ./src xml cleancode --report-file=tmp/cleancode.xml  2>&1)
    if [ $? -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      cat << EOF >> docs/phpmd.md
## Clean Code
$(xsltproc phpmd.xsl tmp/cleancode.xml)
EOF
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi

    printf "Checking code design... "
    PHPMD_OUTPUT=$($PHPMD ./src xml design --report-file=tmp/design.xml  2>&1)
    if [ $? -eq 0 ]; then
      printf "${GREEN}PASSED${NC}\n"
    else
      cat << EOF >> docs/phpmd.md
## Design
$(xsltproc phpmd.xsl tmp/design.xml)

$(date)
EOF
      printf "${RED}FAILED${NC}\n"
      PASS=false
    fi
    rm -rf "$DIR"
  else
    printf "\nphpmd is required. Install it with:\n\n  composer require --dev phpmd/phpmd\n\n"
  fi
else
  printf "\nxsltproc is required. Install it with:\n\n  sudo apt-get install xsltproc (Linux) or brew install libxslt (macOS) \n\n"
fi

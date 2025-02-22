MAKEFLAGS += -s
.DEFAULT_GOAL := extended-htmldocument
.PHONY: extended-htmldocument
.PHONY: check-php

extended-htmldocument:
	@$(MAKE) check-php
	@$(MAKE) run-extended-htmldocument

check-php:
	@if command -v php > /dev/null; then \
		echo "PHP is installed: $$(command -v php)"; \
	else \
		echo "PHP is not installed."; \
		exit 1; \
	fi

run-extended-htmldocument:
	@php bin/console make:extended-htmldocument

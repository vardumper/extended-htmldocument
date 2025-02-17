# ExtendedHTMLDocument
An opinionated approach to add additional functionality to PHP 8.4's fromidable DOM\HTMLDocument

## Installation
```
composer require vardumper/extended-htmldocument
```

## Code Generation
This repository uses the HTML5 specifications to auto-generate PHP Classes for HTML Elements.
You can modify the file HTML specifications to your needs `src/Resources/definitions/html5.yaml` and then re-build the HTML Element classes.
You can also modify the class generation templates in the folder `src/Resources/templates` to change the class signature.

To re-generate the Element\Inline\Anchor class run `php bin/console class:element a`.
To re-generate the all classes run `php bin/console class:element`.

## Why?

### Q: What problem does this library claim to fix or resolve?
Working with a design system brings consistency, but takes flexibility.
Early on, when you start creating a design system, you have to decide which frontend technology you want to use (Twig, Next, React, etc). 
If this requirement changes in the future, for example if you want to switch from Twig to Next, then you need to rework your atoms, molecules, organisms, and so on. It gets worse, if there are differences in the HTML or CSS classes, chances are you also have to rework your CSS.

### A: Standardized Code Generation for different Platforms and use-cases. 
If I am able to describe an element of a design system with an easy-to-read, standardized YAML file. This library helps you generate code for different use cases.

### How
HTML is one of the oldest, yet most important markup languages we have. Web Developers (and Designers) use it and work with it every day.
In order to homogenize the code and improve the code quality I want to be able to generate code for a design systems atoms, molecules, organisms, pages 
The goal of this repository is to have a base library, that can create native PHP DOM Elements that are valid for each HTML element.

## Features
Every HTML class instance knows:
* its level (inline, block or void)
* if it is stylable
* if it is s self-enclosing
* what its element-specific attributes are
* what its required attributes are
* has a __toString() method to turn the instance into HTML.

## What else can you do with this?


The purpose of this package is to add a stronger focus to HTML5 elements functionality to `DOM\HTMLElement` and `DOM\HTMLDocument` classes.

## Running tests
To run tests, use the following command:
vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ExtendedHTMLDocumentTest.php

<p align="center">
    <a href="https://www.w3.org/TR/2011/WD-html5-20110405/" target="_blank">
        <img width="100px" height="auto" style="max-width: 300px !important; max-height: 130px !important;" src="https://vardumper.github.io/extended-htmldocument/html5_logo-with-wordmark.svg" alt="HTML5 Logo" />
    </a>
    <a href="https://www.php.net/manual/de/class.dom-htmldocument.php" target="_blank">
        <img width="180px" height="auto" style="max-width: 300px !important; max-height: 130px !important;" src="https://vardumper.github.io/extended-htmldocument/file_type_php3.svg" alt="PHP Logo">
    </a>
    <h1 align="center">Extended HTML Document Library</h1>
    <br>
</p>

[![Vulnerabilities for extended-htmldocument](https://dtrack.erikpoehler.us/api/v1/badge/vulns/project/37279553-0c47-476a-9efd-ed379fabca1a?apiKey=odt_J5OKz9JcWpKAnqz80whxTvwA3oQjGBGy)](https://dtrack.erikpoehler.us/projects/37279553-0c47-476a-9efd-ed379fabca1a)
![Static Badge](https://img.shields.io/badge/unit%20tests-passing-green?style=flat&color=%234c1)
[![Code Coverage](https://github.com/vardumper/extended-htmldocument/blob/main/coverage.svg)](https://vardumper.github.io/extended-htmldocument/unit-tests)
[![Latest Stable Version](https://poser.pugx.org/vardumper/extended-htmldocument/v/stable)](https://packagist.org/packages/vardumper/extended-htmldocument) 
[![Total Downloads](https://poser.pugx.org/vardumper/extended-htmldocument/downloads)](https://packagist.org/packages/vardumper/extended-htmldocument) 

This library provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications.
It also provides a way to automatically transform HTML into different templating engines or code for frontend frameworks.
It also adds autocompletion to PHP for all HTML5 elements, which is especially useful when working with DOM Documents.
It adds additional functionality and a stronger focus on HTML5 while being fully compatible with PHP's DOM\HTMLDocument and DOM\HTMLElement classes.

## Installation
```bash
composer require --dev vardumper/extended-htmldocument
```

## TL;DR

This library adds the HTML5 specification to PHP and is fully compatible with `DOM\HTMLDocument`. You can create an `Anchor()` object and append it to any `DOM\Document`.

```php
use Html\Delegator\HTMLDocumentDelegator as HTMLDocument;
use Html\Element\Inline\Anchor;

$dom = HTMLDocument::createEmpty()
echo (string) Anchor::create($dom)
    ->setClass('secondary')
    ->setRel(RelEnum::NOFOLLOW)
    ->setHref('https://google.com')
    ->setTitle('Google it')
    ->setContent('Click me');
// output is:
// <a class="secondary" href="https://google.com" rel="nofollow" title="Google it">Click me</a>
```
## Generated Templates
Templates are generated from the HTML5 schema for every HTML element. These allow for better consistency in your design system(s), support all possible HTML attributes and have basic validations for enum attributes.
Files are grouped into inline, block and void elements. For elements with a specific content model, a composed template is generated as well. (eg `<table><tr><td>Cell</td><tr></table>`)

### Blade
Blade templates can be found in [`templates/blade`](https://github.com/vardumper/extended-htmldocument/tree/main/templates/blade). The [README](https://github.com/vardumper/extended-htmldocument/blob/main/templates/blade/README.md) has more infos and usage examples. Blade templates can also be installed via `npm` with the [@typesafe-html5/blade](https://www.npmjs.com/package/@typesafe-html5/blade) package.
### React & NextJS
React and NextJS templates can be found in `templates/blade`. See the Blade-specific [README](https://github.com/vardumper/extended-htmldocument/blob/main/templates/blade/README.md) file for details. Blade templates can also be installed via `npm` with the [@typesafe-html5/react](https://www.npmjs.com/package/@typesafe-html5/react) package.
### Storybook 
Storybook with atoms for all HTML5 elements can be [seen in the Demo](https://vardumper.github.io/extended-htmldocument/storybook-site/). Files can be found in [`templates/storybook`](https://github.com/vardumper/extended-htmldocument/tree/main/templates/storybook). There's also a [README](https://github.com/vardumper/extended-htmldocument/blob/main/templates/storybook/README.md) with more details.
### Storybook for Twig
TBD
### Storybook for React/NextJS
TBD
### Twig
Twig templates for flexible and performant use with `include`, `embed`, and `use` can be found in [`templates/twig`](https://github.com/vardumper/extended-htmldocument/tree/main/templates/twig). See the [README](https://github.com/vardumper/extended-htmldocument/blob/main/templates/twig/README.md) for more details and usage examples. Twig templates can also be installed via `npm` with the [@typesafe-html5/twig](https://www.npmjs.com/package/@typesafe-html5/twig) package.
### Twig Components Bundle
Generated, typesafe Twig Components for use with Symfony UXs Twig Components can be found in [`templates/twig-component`](https://github.com/vardumper/extended-htmldocument/tree/main/templates/twig-component). See the [README](https://github.com/vardumper/extended-htmldocument/blob/main/templates/twig-component/README.md) for more details and usage examples. Twig templates can also be installed via the Symfony Bundle [vardumper/html5-twig-component-bundle](https://github.com/vardumper/html5-twig-component-bundle) package.
### Typescript
Typescript templates can be found in [`templates/typescript`](https://github.com/vardumper/extended-htmldocument/tree/main/templates/typescript). See the [README](https://github.com/vardumper/extended-htmldocument/blob/main/templates/typescript/README.md) for more details and usage examples. Typescript templates can also be installed via `npm` with the [@typesafe-html5/typescript](https://www.npmjs.com/package/@typesafe-html5/typescript) package.

## Documentation
See the [Documentation](https://vardumper.github.io/extended-htmldocument/) for more.


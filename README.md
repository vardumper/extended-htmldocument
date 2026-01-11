<p align="center">
    <a href="https://www.w3.org/TR/2011/WD-html5-20110405/" target="_blank">
        <img style="max-width: 300px !important; max-height: 130px !important;" src="data:image/svg+xml,&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 512 512&quot;&gt;%0A%09&lt;title&gt;HTML5 Logo&lt;/title&gt;%0A%09&lt;path d=&quot;M108.4 0h23v22.8h21.2V0h23v69h-23V46h-21v23h-23.2M206 23h-20.3V0h63.7v23H229v46h-23M259.5 0h24.1l14.8 24.3L313.2 0h24.1v69h-23V34.8l-16.1 24.8l-16.1-24.8v34.2h-22.6M348.7 0h23v46.2h32.6V69h-55.6&quot;/&gt;%0A%09&lt;path fill=&quot;%23e44d26&quot; d=&quot;M107.6 471l-33-370.4h362.8l-33 370.2L255.7 512&quot;/&gt;%0A%09&lt;path fill=&quot;%23f16529&quot; d=&quot;M256 480.5V131H404.3L376 447&quot;/&gt;%0A%09&lt;path fill=&quot;%23ebebeb&quot; d=&quot;M142 176.3h114v45.4h-64.2l4.2 46.5h60v45.3H154.4M156.4 336.3H202l3.2 36.3 50.8 13.6v47.4l-93.2-26&quot;/&gt;%0A%09&lt;path fill=&quot;%23fff&quot; d=&quot;M369.6 176.3H255.8v45.4h109.6M361.3 268.2H255.8v45.4h56l-5.3 59-50.7 13.6v47.2l93-25.8&quot;/&gt;%0A&lt;/svg&gt;" alt="HTML5 Logo" />
    </a>
    <a href="https://www.php.net/manual/de/class.dom-htmldocument.php" target="_blank">
        <img style="max-width: 300px !important; max-height: 130px !important;" src="https://vardumper.github.io/extended-htmldocument/file_type_php3.svg" alt="PHP">
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


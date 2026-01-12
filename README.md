<table align="center" style="border-collapse:collapse !important; border:none !important;">
  <tr style="border:0px none; border-top: 0px none !important;">
    <td align="center" valign="middle" style="padding:0 1rem; border:none !important;">
      <a href="https://www.w3.org/TR/2011/WD-html5-20110405/" target="_blank">
        <img src="https://vardumper.github.io/extended-htmldocument/html5_logo-with-wordmark.svg" style="display:block; height:90px; width:auto; max-width:300px;" alt="HTML5 Logo" />
      </a>
    </td>
    <td align="center" valign="middle" style="padding:0 1rem; border:none !important;">
      <a href="https://www.php.net/manual/de/class.dom-htmldocument.php" target="_blank">
        <img src="https://vardumper.github.io/extended-htmldocument/file_type_php3.svg" style="display:block; height:100px; width:auto; max-width:220px;" alt="PHP Logo" />
      </a>
    </td>
  </tr>
</table>
<h1 align="center">Extended HTML Document Library</h1>

<p dir="auto" align="center"><a href="https://dtrack.erikpoehler.us/projects/37279553-0c47-476a-9efd-ed379fabca1a" rel="nofollow"><img src="https://camo.githubusercontent.com/49e524a5f841859fb75ecc760a575cd189174dc7862b62cb97c23e121af0292f/68747470733a2f2f64747261636b2e6572696b706f65686c65722e75732f6170692f76312f62616467652f76756c6e732f70726f6a6563742f33373237393535332d306334372d343736612d396566642d6564333739666162636131613f6170694b65793d6f64745f4a354f4b7a394a6357704b416e717a383077687854767741336f516a47424779" alt="Vulnerabilities for extended-htmldocument" data-canonical-src="https://dtrack.erikpoehler.us/api/v1/badge/vulns/project/37279553-0c47-476a-9efd-ed379fabca1a?apiKey=odt_J5OKz9JcWpKAnqz80whxTvwA3oQjGBGy" style="max-width: 100%;"></a>
<a target="_blank" rel="noopener noreferrer nofollow" href="https://camo.githubusercontent.com/0395833017ab75581633c6828b2a15a3e2b8146edfd2fc916b8c4dab59859441/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f756e697425323074657374732d70617373696e672d677265656e3f7374796c653d666c617426636f6c6f723d253233346331"><img src="https://camo.githubusercontent.com/0395833017ab75581633c6828b2a15a3e2b8146edfd2fc916b8c4dab59859441/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f756e697425323074657374732d70617373696e672d677265656e3f7374796c653d666c617426636f6c6f723d253233346331" alt="Static Badge" data-canonical-src="https://img.shields.io/badge/unit%20tests-passing-green?style=flat&amp;color=%234c1" style="max-width: 100%;"></a>
<a href="https://vardumper.github.io/extended-htmldocument/unit-tests" rel="nofollow"><img src="https://github.com/vardumper/extended-htmldocument/raw/main/coverage.svg" alt="Code Coverage" style="max-width: 100%;"></a>
<a href="https://packagist.org/packages/vardumper/extended-htmldocument" rel="nofollow"><img src="https://camo.githubusercontent.com/f0ea27fa2c20e81d786e2317d886a9ce6abf5948f3e666d34ff35d4d7f26efce/68747470733a2f2f706f7365722e707567782e6f72672f76617264756d7065722f657874656e6465642d68746d6c646f63756d656e742f762f737461626c65" alt="Latest Stable Version" data-canonical-src="https://poser.pugx.org/vardumper/extended-htmldocument/v/stable" style="max-width: 100%;"></a>
<a href="https://packagist.org/packages/vardumper/extended-htmldocument" rel="nofollow"><img src="https://camo.githubusercontent.com/d94dac4925a74bfbe6577d497be10251d245540ff43c18d7c9a4ac368ec074a6/68747470733a2f2f706f7365722e707567782e6f72672f76617264756d7065722f657874656e6465642d68746d6c646f63756d656e742f646f776e6c6f616473" alt="Total Downloads" data-canonical-src="https://poser.pugx.org/vardumper/extended-htmldocument/downloads" style="max-width: 100%;"></a></p>

This library provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications.
It also provides a way to automatically transform HTML into different templating engines or code for frontend frameworks.
It also adds autocompletion to PHP for all HTML5 elements, which is especially useful when working with DOM Documents.
It adds additional functionality and a stronger focus on HTML5 while being fully compatible with PHP's DOM\HTMLDocument and DOM\HTMLElement classes.

## Installation
```bash
composer require --dev vardumper/extended-htmldocument
```

## TL;DR

This library adds the HTML5 specification to PHP and is fully compatible with `DOM\HTMLDocument`. You can now instantiate an `Anchor` without passing a document.

```php
use Html\Element\Inline\Anchor;
use Html\Enum\RelEnum;

echo (new Anchor())
    ->setClass('secondary')
    ->setRel(RelEnum::NOFOLLOW)
    ->setHref('https://google.com')
    ->setTitle('Google it')
    ->setContent('Click me');
// produces: <a class="secondary" href="https://google.com" rel="nofollow" title="Google it">Click me</a>
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


[![Vulnerabilities for extended-htmldocument](https://dtrack.erikpoehler.us/api/v1/badge/vulns/project/37279553-0c47-476a-9efd-ed379fabca1a?apiKey=odt_J5OKz9JcWpKAnqz80whxTvwA3oQjGBGy)](https://dtrack.erikpoehler.us/projects/37279553-0c47-476a-9efd-ed379fabca1a)
[![Code Coverage](https://github.com/vardumper/extended-htmldocument/blob/main/coverage.svg)](https://vardumper.github.io/extended-htmldocument/intro.html#tests)

# Extended HTML Document Library

This library provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications.
It also provides a way to automatically transform HTML into different templating engines or code for frontend frameworks.
It also adds autocompletion to PHP for all HTML5 elements, which is especially useful when working with DOM Documents.
It adds additional functionality and a stronger focus on HTML5 while being fully compatible with PHP's DOM\HTMLDocument and DOM\HTMLElement classes.

## TL;DR

```php
$dom = HTMLDocumentDelegator::createEmpty()
echo (string) (Anchor::create($dom))
    ->setClass('secondary')
    ->setRel(RelEnum::NOFOLLOW)
    ->setHref('https://google.com')
    ->setTitle('Google it');
// outputs: <a href="https://google.com" rel="nofollow" title="Google it"></a>
```

## Documentation
See the [Documentation](https://vardumper.github.io/extended-htmldocument/) for more.

## Installation
```bash
composer require --dev vardumper/extended-htmldocument
```

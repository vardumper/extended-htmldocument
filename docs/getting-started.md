# Installation

If you are intending to use this library for code generation, adding it as a dev dependency is recommended.

```bash
composer require --dev vardumper/extended-htmldocument
```

# Usage
::: code-group

```php [PHP]
use Html\Element\Inline\Anchor;

echo (string) (new Anchor('Click here'))
  ->setHref('https://example.com')
  ->setTitle('Some info about the link')
  ->setRel('nofollow')
  ->setRole('button');
```

```html [HTML5]
<a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    Click here
</a>
```

```php [DOM\HTMLDocument] equivalent
use DOM\HTMLDocument;

$dom = DOM\HTMLDocument::createEmpty();
$anchor = $dom->createElement('a', 'Click here');
$anchor->setAttribute('href', 'https://example.com')
$anchor->setAttribute('title', 'Some info about the link')
$anchor->setAttribute('rel', 'nofollow')
$anchor->setAttribute('role', 'button');
$dom->appendChild($anchor);
echo $dom->saveHTML();
```

:::

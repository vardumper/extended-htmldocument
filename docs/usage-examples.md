---
outline: deep
---

# Basic Usage Examples

## Instantiation

### Creation via `create()` method

```php{4}
$dom = Html\Delegator\HTMLDocumentDelegator::createEmpty();

$anchor = Html\Element\Inline\Anchor::create($dom);
$anchor->textContent = 'This is a test link.';
$anchor->setAttributes([
    'href' => 'https://www.example.com',
    'rel' => Html\Enum\RelEnum::NOOPENER,
    'target' => Html\Enum\TargetEnum::_BLANK
]);
echo $anchor;
// same as $anchor->__toString();
```

In the example above, we make use of three new methods HTMLElementDelegator `create()`, `setAttributes()` and `__toString()` as well as BackedEnums for static values.

The output is
```html{4}
<a href="https://www.example.com" rel="noopener" target="_blank">This is a test link.</a>
```

### Creating in the HTMLDocumentDelegator
In this example we make use of the `HTMLDocument` to create an element.

```php
$dom = Html\Delegator\HTMLDocumentDelegator::createEmpty();

$div = $dom->createElement('div');
$div->textContent = 'This is a dynamic div element.';
$div->setAttributes([
    'class' => 'dynamic-div',
    'id' => 'dynamicDiv'
]);
echo $div; // same as $div->__toString();
```

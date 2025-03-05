# Usage Examples

## Autocompletion in your IDE

When working with this library, you get your IDEs autocompletion feature for all HTML elements. This will give you a quick insight into the available elements their attributes.
This is especially useful when you are working in a DOM\HTMLDocument and you don't know all the HTML elements or attributes there are.

tbd add a gif

## Instantiation
::: warning
This part is currently work in progress. The information below might be outdated, incomplete or incorrect.
:::

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
// or: $anchor->__toString();
```

In the example above, we're passing an instance of the HTMLDocumentDelegator to the create method, which  we make use of three new methods HTMLElementDelegator `create()`, `setAttributes()` and `__toString()` as well as BackedEnums for static values.

The output will be this:
```html{4}
<a href="https://www.example.com" rel="noopener" target="_blank">
    This is a test link.
</a>
```

### Creating in the HTMLDocumentDelegator
In this example we make use of the `HTMLDocumentDelegator` to create an element.

```php
$dom = Html\Delegator\HTMLDocumentDelegator::createEmpty();

$div = $dom->createElement('div', 'This is a div element.');
$div->setAttributes([
    'class' => 'container',
    'id' => 'my-id',
]);
echo $div;
// or: $div->__toString();
```

The output will be this:
```html{4}
<div id="my-id" class="container">
    This is a div element.
</div>
```

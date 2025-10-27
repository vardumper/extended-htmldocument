# Installation

If you are intending to use this library for code generation, adding it as a dev dependency is recommended.

```bash
composer require --dev vardumper/extended-htmldocument
```

## Usage
::: code-group

```php [This library]
// Extended HTMLDocument library
$dom = \Html\Delegator\HTMLDocumentDelegator::createEmpty();
echo (string) (\Html\Element\Inline\Anchor::create($dom))
  ->setHref('https://example.com')
  ->setTitle('Some info about the link')
  ->setRel('nofollow')
  ->setRole('button')
  ->setInnerHTML('Click here');
```
```php [DOM\HTMLDocument]
// Standard HTMLDocument library
$dom = \DOM\HTMLDocument::createEmpty();
$anchor = $dom->createElement('a', 'Click here');
$anchor->setAttribute('href', 'https://example.com');
$anchor->setAttribute('title', 'Some info about the link');
$anchor->setAttribute('rel', 'nofollow');
$anchor->setAttribute('role', 'button');
$dom->appendChild($anchor);
echo $dom->saveHTML($anchor);
```
:::

```html [HTML5]
<a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    Click here
</a>
```

## Generated Templates
The library also includes Template Generators to automatically generate template files for use in other languages. See `templates/twig` for example.

While the include and embed snippets below aren't shorter than just writing HTML directly, they do provide for better consistency and reusability when building larger templates or design systems. Furthermore, they do some basic validation of attributes or leave out attrributes if a default value is given. Yet, its an opinionated approach and you can adjust the Generator and template used to generate them `src/Resources/templates/twig.tpl.twig`.

### Twig examples
::: code-group
```twig  [Twig include]
{% include 'inline/a.twig' with {
  href: 'https://example.com',
  title: 'Some info about the link'
  rel: 'nofollow',
  role: 'button',
  content: '<strong>Click here</strong>'
} %}
```
```twig [Twig embed]
{% embed 'inline/a.twig' with {
  href: 'https://example.com',
  title: 'Some info about the link'
  rel: 'nofollow',
  role: 'button'
} %}
  {% block content %}
    {% include 'inline/strong.twig' with {
      content: 'Overriding content here'
    } %}
  {% endblock %}
{% endblock %}

```
```twig [Twig use]
{% use 'inline/a.twig' %}

{% block a %}
  {% set href = 'https://example.com' %}
  {% set title = 'Some info about the link' %}
  {% set rel = 'nofollow' %}
  {% set role = 'button' %}
  {% block content %}
    {% include 'inline/strong.twig' with {
      content: 'Overriding content here'
    } %}
  {% endblock %}
  {{ parent() }}
{% endblock %}
```
:::
Content can be passed in two ways: via the `content` parameter, or via a block override when using `embed`.
Using block overrides, allows you to nest other templates inside the link, for example to make the link text bold.

```html [HTML5]
<a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    Click here
</a>
```

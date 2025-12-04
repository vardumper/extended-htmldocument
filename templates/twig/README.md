# Twig Templates

Auto-generated Twig templates for HTML elements with built-in validation and best consistency.

## Setup

To use these templates, register the path with an alias in your Twig configuration:

```php
$loader = new \Twig\Loader\FilesystemLoader();
$loader->addPath('/path/to/vendor/vardumper/extended-htmldocument/templates/twig', 'html');
$twig = new \Twig\Environment($loader);
```

## Usage

### Include

```twig
{% include '@html/inline/a/a.twig' with {
  href: 'https://example.com',
  title: 'Some info about the link',
  rel: 'nofollow',
  role: 'button',
  content: '<strong>Click here</strong>'
} %}
```

### Embed

```twig
{% embed '@html/inline/a/a.twig' with {
  href: 'https://example.com',
  title: 'Some info about the link',
  rel: 'nofollow',
  role: 'button'
} %}
  {% block content %}
    {% include '@html/inline/strong/strong.twig' with {
      content: 'Overriding content here'
    } %}
  {% endblock %}
{% endembed %}
```

### Use

```twig
{% use '@html/inline/a/a.twig' %}

{% block a %}
  {% set href = 'https://example.com' %}
  {% set title = 'Some info about the link' %}
  {% set rel = 'nofollow' %}
  {% set role = 'button' %}
  {% block content %}
    {% include '@html/inline/strong/strong.twig' with {
      content: 'Overriding content here'
    } %}
  {% endblock %}
  {{ parent() }}
{% endblock %}
```

## Notes

Content can be passed in two ways: via the `content` parameter, or via a block override when using `embed`. Using block overrides allows you to nest other templates inside elements.

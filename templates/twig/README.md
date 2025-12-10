# Twig Templates

Auto-generated Twig templates for HTML elements with built-in validation and best consistency.

## Installation
This package is part of the Extended HTMLDocument library. There's several ways you can install and use it.

### Via Composer
```bash
composer require vardumper/extended-htmldocument
```

### Via NPM, Yarn or PNPM
This package is also available via npmjs.org at [@typesafe-html5/twig](https://www.npmjs.com/package/@typesafe-html5/twig). It's a static package containing only the Twig templates.

```bash
npm install @typesafe-html5/twig
# yarn add @typesafe-html5/twig
# pnpm add @typesafe-html5/twig
```

## Configure Node.js
If you are using Node.js with Twig, you can register the path with an alias like this:
Keep in mind, that there a several different Twig loaders and parsers. This example uses the `filesystem` loader.

```javascript
const Twig = require('twig');
const path = require('path');
Twig.extendLoader('filesystem', function (location, params, callback) {
    const fullPath = path.join(__dirname, 'node_modules/@typesafe-html5/twig/', location);
    return Twig.Templates.load(fullPath, params, callback);
});
```

## Configure PHP

You can use PHP to render these templates, for this register the path with an alias in your Twig configuration:

```php
$loader = new \Twig\Loader\FilesystemLoader();
$loader->addPath('/path/to/vendor/vardumper/extended-htmldocument/templates/twig', 'html');
$twig = new \Twig\Environment($loader);
```

## Configure Symfony
In Symfony, register the path with an alias in your Twig configuration (`config/packages/twig.yaml`):

```yaml
twig:
    paths:
        '%kernel.project_dir%/vendor/vardumper/extended-htmldocument/templates/twig': html
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

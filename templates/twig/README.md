# Twig Templates for HTML5 Elements

Type-safe, auto-generated Twig templates for all HTML5 elements with full WCAG, ARIA support and validation. Part of Extended HTMLDocument - schema-first from HTML5 schema.

## Features

- **Type-Safe**: Full Twig type support with comprehensive validation
- **ARIA Compliant**: Complete ARIA attribute support with proper validation
- **Framework Agnostic**: Works with any Twig-based framework
- **Auto-Generated**: Consistent API across all HTML5 elements via schema-first approach
- **Template Integration**: Native Twig syntax and features

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

### Data data-* and Alpine x-*: attributes 
You can pass arbitrary `data-*` attributes via the `data-attributes` mapping. For example:

```twig
{% include '@html/block/article/article.twig' with {
  content: 'Article body',
  'data-attributes': {
    'test': 'value',
    'role': 'article'
  }
} %}
```

This renders `data-test="value"` and `data-role="article"` on the article element.

Alpine.js attributes (like `x-on`) can be passed via an `alpine-attributes` map. Example:

```twig
{% include '@html/block/section/section.twig' with {
  content: 'Interactive Element',
  'alpine-attributes': {
    '@click': 'handleClick()',
    'x-show': 'open'
  }
} %}
```

This will render `@click="handleClick()"` and `x-show="open"` on the section element.

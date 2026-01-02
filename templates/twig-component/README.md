# Twig Components for HTML5 Elements

Type-safe, auto-generated Twig components for all HTML5 elements with full WCAG, ARIA support and validation. Part of Extended HTMLDocument - schema-first from HTML5 schema.

## Features

- **Symfony UX Integration**: Native Symfony Twig Component support
- **ARIA Compliant**: Complete ARIA attribute support with proper validation
- **Auto-Generated**: Consistent API across all HTML5 elements via schema-first approach
- **Enum Validation**: Static attribute validation for HTML compliance
- **Modern PHP**: Requires PHP 8.4+ for DOM\HTMLDocument features

## Requirements
* PHP 8.4 – the underlying Extended HTMLDocument library is built upon PHPs DOM\HTMLDocument which is available since PHP 8.4+

Since only the Enums are used for attribute validation here, adding support for older PHP versions could be done easily if it's needed or requested.

## Installation

```bash
composer require vardumper/html5-twig-component-bundle
```

The bundle includes automatic service registration - no additional configuration needed!

## Configuration

The bundle is automatically registered via Symfony Flex. If you need to register it manually, add to `config/bundles.php`:

```php
# config/bundles.php
return [
    // ...
    Html\TwigComponentBundle\HtmlTwigComponentBundle::class => ['all' => true],
];
```

Next, tell Symfony that Twig Components can be found in a new path. Edit `config/packages/twig_component.yaml` and add the following:

```yaml
# config/packages/twig_component.yaml
twig_component:
    defaults:
        Html\TwigComponentBundle\Twig\: '%kernel.project_dir%/vendor/vardumper/html5-twig-component-bundle/src/Twig/'
```

All Twig Components are automatically discovered and registered through the bundle's DependencyInjection extension. No manual service configuration required!

## Usage

Use any HTML element as a Twig Component:

```twig
<twig:Blockquote cite="https://example.com">
    This is a quote from example.com
</twig:Blockquote>

<twig:Button role="button" type="submit">
    Submit Form
</twig:Button>

<twig:Input type="email" name="email" required />
```

### Use in anonymous Twig Components
```twig
{# templates/components/Teaser.html.twig #}
<twig:Div class="teaser"> 
    <twig:H3>{{ headline }}</twig:H3>
    <twig:P>{{ content }}</twig:P>
    <twig:A role="button" href="{{ buttonLink }}" title="{{ buttonText }}">{{ buttonText }}</twig:A>
</twig:Div>
```

which can then be used in pages:
```twig
{# templates/page.html.twig #}
{% for item in teasers %}
    <twig:Teaser 
        headline="{{ item.headline }}" 
        content="{{ item.content }}" 
        buttonLink="{{ item.buttonLink }}" 
        buttonText="{{ item.buttonText }}">
    </twig:Teaser>
{% endfor %}
```

### Passing arrays as component props
You can pass associative arrays to component props using the `:` notation. For example to pass `data-*` attributes to the component:
```twig
<twig:Div :dataAttributes="{'role': 'article'}">
    Hello world
</twig:Div>
```

This will render a `data-role="article"` attribute on the generated component's root element.
## Features

- ✅ All HTML5 elements supported
- ✅ Full ARIA attributes support
- ✅ Type-safe enum validation
- ✅ PreMount validation with OptionsResolver
- ✅ Proper namespace structure (Block/Inline/Void)

## Components Structure

Components are organized by type:
- `Block` - Block-level elements (div, section, article, etc.)
- `Inline` - Inline elements (span, a, strong, etc.)
- `Void` - Self-closing elements (img, input, br, etc.)


## Read More
* [Extended HTMLDocument Documentation](https://vardumper.github.io/extended-htmldocument/)
* [Extended HTMLDocument Github Repository](https://github.com/vardumper/extended-htmldocument)
* [Twig Components](https://symfony.com/bundles/ux-twig-component/current/index.html)
* [Symfony UX](https://ux.symfony.com/)

## Issues & Bugs

Please report issues in this packages home at [Extended HTMLDocument](https://github.com/vardumper/extended-htmldocument)
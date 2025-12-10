# HTML Component Bundle

Symfony UX Twig Components for all HTML5 elements with ARIA support.

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

Next, configure tell Symfony where to find your component atoms by adding this path to `config/packages/twig_component.yaml`.

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
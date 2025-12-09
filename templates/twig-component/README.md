# HTML Component Bundle

Symfony UX Twig Components for all HTML5 elements with ARIA support.

## Installation

```bash
composer require html/component-bundle
```

## Configuration

Register the bundle in `config/bundles.php`:

```php
return [
    // ...
    Html\ComponentBundle\HtmlComponentBundle::class => ['all' => true],
];
```

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

## License

MIT

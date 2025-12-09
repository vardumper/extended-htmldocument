# Twig Component Bundle with all HTML5 elements

Symfony UX Twig Components for all HTML5 elements with ARIA support and static attribute validation via Enums.
It provides auto-completion in your IDE of choice, so all available attributes can be quickly accessed. 

## Installation

```bash
composer require vardumper/html5-twig-component-bundle
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

## Read More
* [Extended HTMLDocument Documentation](https://vardumper.github.io/extended-htmldocument/)
* [Extended HTMLDocument Github Repository](https://github.com/vardumper/extended-htmldocument)
* [Twig Components](https://symfony.com/bundles/ux-twig-component/current/index.html)
* [Symfony UX](https://ux.symfony.com/)

# Blade Templates for HTML5 Elements

Type-safe, auto-generated Blade templates for all HTML5 elements with full WCAG, ARIA support and validation. Part of Extended HTMLDocument - schema-first from HTML5 schema.

## Features

- **Type-Safe**: Full PHP/Laravel type support with comprehensive validation
- **ARIA Compliant**: Complete ARIA attribute support with proper validation
- **Laravel Integration**: Native Blade syntax and Laravel features
- **Auto-Generated**: Consistent API across all HTML5 elements via schema-first approach
- **Enum Validation**: Static attribute validation for HTML compliance

## Installation

### Standalone Composer package (recommended for Laravel projects)

```bash
composer require vardumper/html5-blade-templates
```

Then register the component path in your `AppServiceProvider`:

```php
use Illuminate\Support\Facades\Blade;

public function boot(): void
{
    Blade::componentPath(
        base_path('vendor/vardumper/html5-blade-templates')
    );
}
```

### NPM, Yarn, PNPM, etc

This is a static NPM package, providing just the Blade templates.

```bash
npm install @typesafe-html5/blade
yarn add @typesafe-html5/blade
pnpm add @typesafe-html5/blade
```

## Usage

```blade
<x-inline.a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    Click here
</x-inline.a>
```

Or via `@include` (note: Blade resolves `inline/a/index.blade.php` as `blade.inline.a`):
```blade
@include('blade.inline.a', ['content' => 'Click me', 'href' => 'https://example.com'])
@include('blade.inline.abbr', ['content' => 'ABBR', 'title' => 'Abbreviation'])
```

### With Nested Components

```blade
<x-inline.a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    <x-inline.strong>
        Click here
    </x-inline.strong>
</x-inline.a>
```

### Usage in Example Component

```blade
<x-block.div class="teaser">
  <x-block.hgroup>
    <x-block.h3>
      Headline
    </x-block.h3>
    <x-block.h4>
      Subheadline
    </x-block.h4>
  </x-block.hgroup>
  <x-block.p>
    Description
  </x-block.p>
  <x-inline.img src="https://picsum.photos/340/140" alt="Image description" width="340" height="140" />
  <x-inline.a role="button" href="#">
    Read more
  </x-inline.a>
</x-block.div>
```

The component tag prefix (`x-block.*`, `x-inline.*`, `x-void.*`) corresponds to the element's content model and maps to `index.blade.php` inside each element's subdirectory.

## Benefits & Features

When or why is using these Blade templates better than writing plain HTML?
* Because the templates are generated from the HTML5 schema, every atom is guaranteed to be structurally correct, semantically valid, consistently formatted.
* Enum attribute validation ensures that static attributes can only receive allowed options.
* This gives you a pristine, error-free starting point for every component you build on top of them.
* It's the “perfect atom” for each HTML5 element, and you build only the custom logic or styling on top of it
* Your IDE might be able to provide auto-completion for an improved ease of use.

## Read More
* [Extended HTMLDocument Documentation](https://vardumper.github.io/extended-htmldocument/)
* [Laravel Blade Templates Documentation](https://laravel.com/docs/12.x/blade)

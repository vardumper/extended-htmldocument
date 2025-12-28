# Blade Templates for HTML5 Elements

Type-safe, auto-generated Blade templates for all HTML5 elements with full WCAG, ARIA support and validation. Part of Extended HTMLDocument - schema-first from HTML5 schema.

## Features

- **Type-Safe**: Full PHP/Laravel type support with comprehensive validation
- **ARIA Compliant**: Complete ARIA attribute support with proper validation
- **Laravel Integration**: Native Blade syntax and Laravel features
- **Auto-Generated**: Consistent API across all HTML5 elements via schema-first approach
- **Enum Validation**: Static attribute validation for HTML compliance

## Installation

### with Composer
```bash
composer require vardumper/extended-htmldocument
```

### NPM, Yarn, PNPM, etc

This is a static NPM package, providing just the Blade templates.

```bash
npm install @typesafe-html5/blade
yarn add @typesafe-html5/blade
pnpm add @typesafe-html5/blade
```

## Setup

Register the components path in your Laravel application's `AppServiceProvider`

```php
use Illuminate\Support\Facades\Blade;

public function boot(): void
{
    Blade::componentPath(
        base_path('vendor/vardumper/extended-htmldocument/templates/blade')
    );
}
```

## Usage

```blade
<x-inline.a.a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    Click here
</x-inline.a.a>
```

Or
```blade
@include('inline.a.a', ['content' => 'Click me', 'href' => 'https://example.com'])
@include('inline.abbr.abbr', ['content' => 'ABBR', 'title' => 'Abbreviation'])
```

### With Nested Components

```blade
<x-inline.a.a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    <x-inline.strong.strong>
        Click here
    </x-inline.strong.strong>
</x-inline.a.a>
```

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

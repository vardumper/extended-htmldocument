# Blade Templates

Fully-typesafe Laravel Blade templates for all HTML5 elements. Provides validation for static HTML attributes (enums). Supports ARIA, WCAG by design.
These templates are compiled from the HTML5 schema.

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

[Full Documentation](https://vardumper.github.io/extended-htmldocument/)

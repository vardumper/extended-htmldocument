# Blade Templates

Auto-generated Blade templates for HTML elements with built-in validation for best consistency.

## Setup

Register the components path in your Laravel application's `AppServiceProvider`:

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
</x-inline.a>
```

### With Nested Components

```blade
<x-inline.a.a
    href="https://example.com"
    title="Some info about the link"
    rel="nofollow"
    role="button">
    <x-inline.strong>
        Click here
    </x-inline.strong>
</x-inline.a>
```

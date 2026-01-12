# Yii
Adding this library as a dependency to your Yii application allows you to either use the pre-made templates, and to use the DOM\HTMLDocument and DOM\HTMLElement compliant PHP classes for all HTML5 elements, including immutable attribute Enums for validation.

## Installation
```bash
composer require vardumper/extended-htmldocument
```
## Use in PHP DOM\HTMLDocument

```php
use Html\Element\Inline\Anchor;
use Html\Enum\RelEnum;

echo (new Anchor())
    ->setClass('secondary')
    ->setRel(RelEnum::NOFOLLOW)
    ->setHref('https://google.com')
    ->setTitle('Google it')
    ->setContent('Click me');
// produces: <a class="secondary" href="https://google.com" rel="nofollow" title="Google it">Click me</a>
```

## Configure Twig for use of pre-made Twig templates
To configure the path to this libraries' pre-made Twig templates, you need to add an additional path to the filesystem loader, usually in `config/common/di/view-twig.php`:

```php
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Loader\LoaderInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Definitions\Reference;

return [
    LoaderInterface::class => static function (Aliases $aliases) {
        $loader = new FilesystemLoader($aliases->get('@views'));
        $loader->addPath($aliases->get('@vendor/vardumper/extended-htmldocument/templates/twig'), 'html'); // <-- add another path and alias
        return $loader;
    },
    Environment::class => [
        '__construct()' => [
            'loader' => Reference::to(LoaderInterface::class),
            'options' => $params['yiisoft/view-twig']['options'],
        ],
    ],
];
```

Now that Twig finds the new templates, you can use them in your `.twig` files.

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

Content can be passed in two ways: via the `content` parameter, or via a block override when using `embed` or `use`. Using block overrides allows you to nest other templates inside elements.
While these examples seem a bit longer than writing a simple `<a>` tag, what they provide is consistency and validation. You cannot produce invalid HTML with them.

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
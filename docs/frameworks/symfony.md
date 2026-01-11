# Symfony
There are several different ways one can use this library in Symfony. One can:
 - Configure Twig to use the pre-made templates from this library 
 - Using the HTML5 Element and Enum classes in PHP
 - Installing the HTML5 Elements as Twig Components via a custom Bundle

## Using only the pre-made Twig Templates

## Using the HTML5 Element PHP classes and Enums

This library adds the HTML5 specification to PHP and is fully compatible with `DOM\HTMLDocument`. You can create an `Anchor()` object and append it to any `DOM\Document`.

```php
use Html\Delegator\HTMLDocumentDelegator as HTMLDocument;
use Html\Element\Inline\Anchor;

$dom = HTMLDocument::createEmpty()
echo (string) Anchor::create($dom)
    ->setClass('secondary')
    ->setRel(RelEnum::NOFOLLOW)
    ->setHref('https://google.com')
    ->setTitle('Google it')
    ->setContent('Ask a question');
// produces: <a class="secondary" href="https://google.com" rel="nofollow" title="Google it">Ask a question</a>
```

Instead of echoing the HTML, you could also build a HTML page by append the Node to any `DOM\Document`.

## Using only the pre-made Twig Components



### Require the Symfony Bundle

I published pre-made HTML5 element twig components for use with Symfony UX Twig Components as a separate bundle. To install it, run:
`composer require vardumper/html5-twig-component-bundle`

### Configure the Bundle

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

### Usage
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
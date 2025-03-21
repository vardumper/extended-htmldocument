# Features
## **HTML5 Elements as PHP Classes**
Each HTML5 element is a PHP class with a descriptive name and namespace, e.g., Html\Element\Inline\Anchor, Html\Element\Block\Div, and more.

All Html\Element classes are fully compatible with PHP 8.4's DOM\HTMLDocument, delegating properties and methods to underlying DOM objects. This allows seamless appending of Anchor() to HTMLDocumentDelegator, DOM\HTMLDocument, or DOM\Document.

While you can create HTML with DOM\HTMLDocument or DOMDocument, this library is more aligned with the HTML5 specification.

## Specification Mixins
**HTML5** does not exist in a vacuum — it's part of an evolving ecosystem of _CSS frameworks_, _frontend technologies_, _accessibility standards_, _SEO requirements_, _<ins title="or Rich Snippets">structured data</ins>_, _design systems_ and last but not least requirements defined by clients and designers. All of which define how the final HTML5 must look like.

The PHP classes in this library are auto-generated from the HTML5 specification. In order to automatically generate templates, we want to factor in these specifications into our PHP classes.
There are two ways to do this:
- You duplicate the `html5.yaml` file, modify it to your needs and then [recompile the PHP classes](/code-generation) for HTML elements.
- The more elegant way to do this is to create specification mixin files. This library comes with an exemplary

## Template Generators
The library is designed to be flexible. That's why template generators are interchangeable and chainable (if you need multiple formats). You can create your own generators or swap out the renderer for the
HTMLDocumentDelegator and HTMLElementDelegator classes, which are responsible for rendering the HTML elements, once you cast them to a string, or echo them.

By default, the library uses the `HtmlGenerator` which simply returns standards-conform HTML5.
You can swap them out for a more sophisticated renderer, such as a TwigRenderer, ReactRenderer, or VueRenderer.

## Versatile Usage
To render HTML into different formats (such as .twig, .jsx, .vue, .svelte, .html, .md) you can use one of:
- **CLI** Provide YAML describing your components and generate HTML, Twig, React, Vue, Svelte, or Markdown files from the command line.
- **CLI Watcher** The Watcher observes a file or path with your YAML component definition(s) and updates the generated templates as you make changes.
- **PHP** You can also create components programmatically.
- **PHP** You can also have PHP parse pre-made YAML files and generate multiple output formats at once. This is useful if you use Storybook with React, Vue or Twig, or if you want to generate Twig templates for a Symfony project.


## **Semantic Helper Methods**
Each HTML element instance has semantic helper methods, such as
- `isUnique()` - is the element unique on a HTML page (eg. `<html>`, `<body>`, `<head>`)
- `isUniquePerParent()` - for example, `<title>` is unique per `<head>`
- `childOf()` - the element can be a direct child of these elements
- `parentOf()` - the element can be a direct parent of these elements
- `isSelfClosing()` - is the element self-closing or not
- `__toString()` - turn the element and its children into a string, HTML markup.

These give context, more info on an element and can be used to validate if a certain HTML element can be used in a specific context.

## **Immutable Enum Attributes**
Static HTML Attributes are represented as BackedEnum classes, for example `RelEnum`, `TargetEnum`, and many more. This ensures that only valid values can be set for an attribute. In order to
```php
(new Anchor('Click here'))
  ->setRel(RelEnum::NOFOLLOW)
  ->setRole(RoleEnum::BUTTON);
  ->setTarget(TargetEnum::BLANK);
```


## **Fluent Setters**
Each HTML element class instance has setters and getters based on the HTML5 specification. The setters can be chained together like this:
```php
$anchor = (new Anchor('Click here'))
  ->setHref('https://example.com')
  ->setTitle('Some info about the link')
  ->setRel('nofollow')
  ->setRole('button');
```
These are also available for all global HTML attributes and for properties of the underlying DOM objects.
```php
$anchor->setHidden(true); // global attribute
$anchor->setInnerHTML('This is <em>links<em> content'); // DOM\Element
```

## **New Convenience Methods**
Each HTML element class instance inherits convenience methods, such as
- `setAttributes()` - set multiple attributes at once
- `setData()` - set multiple data attributes at once
- `set*()` - set global attributes such as id, class, style, lang, dir, tabindex, accesskey, hidden, slot, draggabke, spellcheck, translate, and more.

All of the setters are designed to work the way you want. All of these examples are valid and work:
```php
$input = new Input();

 // via setter (recommended way)
$input->setInputMode('numeric');

// via setter with enum (recommended way)
$input->setInputMode(InputModeEnum::NUMERIC);

// setting multiple attributes at once (recommended)
$input->setAttributes(['inputmode' => 'numeric', 'required' => true]);

//  setting multiple attributes at once (recommended)
$input->setAttributes(['inputmode' => InputModeEnum::NUMERIC]);

// via setAttribute()
$input->setAttribute('inputmode', 'numeric');

// via single attribute with enum
$input->setAttribute('inputmode', InputModeEnum::NUMERIC);

// passing global attributes as 'globals' named parameter
$input = new Input(globals: ['inputmode' => 'numeric']);

// or as enum
$input = new Input(globals: ['inputmode' => InputModeEnum::NUMERIC]);

// via property access
$input->inputmode = InputModeEnum::NUMERIC;

```

## **Autocompletion in your IDE**
When working in PHP context, you automatically get autocompletion for any HTML element and its attributes.

# Extended HTMLDocument

Extended HTMLDocument is a PHP library that provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications and is aimed to be fully-compatible with the underlying `DOM\HTMLDocument` classes in PHP 8.4.


## Stop writing HTML by hand
When working with a design system or component library, such as Storybook, you have to make a choice as to what technologies and frameworks you want to use.
If you want to use the components in a different technology, you have to rewrite them. This is a time-consuming and error-prone process.

## Start generating HTML with PHP
By establishing an easy-to-read and easy-to-use YAML format which describes your components, you can have PHP generate the design system components for you.
This is where this library comes into play. It aims to provide a way to create standards-compliant HTML5 documents or document fragments (like atoms, molecules, organisms and components) and automatically generate different output formats for you.
That said, the only output format provided by this library will be HTML5. However, this library uses Language Providers to support output into other formats, such as Twig, React, Vue, and others.
Learn how you can generate components for Twig, React, Vue and others and in the [Advanced Usage Examples](./advanced-examples) section.

## Planned releases, and features in the works
Find out more on future releases [in the Roadmap](./roadmap).

## Inspiration
This library is heavily inspired by PicoCSS, a CSS reset or CSS Framework. It enables you to streamline your HTML as it manages so beautifully to keep its fingerprint in the HTML down to a minimum. In essence it's a separation of concerns, going back to the roots. HTML is for content, CSS for styling. No clutter like classes is needed to get it to work.
Also, my work with design systems (mostly Storybook.js) and component libraries has inspired me to create this library. I have seen the need for a way to generate components in different technologies, and I believe this library can help with that. Also worth mentioning is Wingsuit, which uses a similar YAML approach to describe components, that I have in mind, here. Furthermore there's hygen, which is a code generator that uses templates to generate code.

<!-- ## Use cases

This library can be useful to PHP Developers in frontend-related contexts, including but not limited to content management systems, templating engines and design systems.
Some examples:
- Instead of writing a Design System for a component library, I can use this library to generate components for me.
- I am a backend developer and don't know all the HTML elements or attributes there are. Auto-completion of your IDE will give you a quick insight into the available elements and attributes.
- I want to work on a Twig Extension, let's say to render `<figure>` elements with `<picture>`, `<img>`, or `<figcaption>`. I can use this library to generate the markup for me, and focus on the content. -->


## Differences to PHP 8.4 `DOM\HTMLDocument`

PHP 8.4 introduced the `DOM\HTMLDocument` class, which is a great addition to the PHP standard library. However, it is not as feature-rich as Extended HTMLDocument. The following are some of the differences:

* HTML5 elements as PHP classes with descriptive names. For example, `Anchor`, `Image`, `Table`, `Form`, and so on.
* Additional convenience methods for HTML elements, such as `__toString()` or `setAttributes()` and more.
* Immutable Enum attributes for static HTML Attributes, for example `RelEnum`, `TargetEnum`, and many more.
* Each HTML element instance has semantic helper methods, such as `isUnique()`, `isUniquePerParent()`, `childOf()`, `parentOf()`, `isSelfClosing()` and more.
* Each HTML element instance knows if it is a block or inline element, what its element-specific attributes are, and which ones are required or optional.

## Run Tests

This library is fully tested with PHPUnit. You can run the tests by executing the following commands in the root directory of the project.

### Unit Tests
```bash
vendor/bin/phpunit
```

### Coverage Report
This library is fully tested with PHPUnit. You can run the tests by executing the following command in the root directory of the project:
```bash
XDEBUG_MODE=coverage vendor/bin/phpunit --coverage-html coverage-report
```

# Extended HTMLDocument

Extended HTMLDocument is a PHP library that provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications and is aimed to be fully-compatible with the underlying `DOM\HTMLDocument` classes in PHP 8.4.

## Problem
When working with a design system or component library, such as Storybook, you have to make a choice as to what technologies and frameworks you want to use.
If you want to use the components in a different technology, you have to rewrite them. This is a time-consuming and error-prone process.

## Goal
By establishing an easy-to-read and easy-to-use YAML format which describes your components, you can have PHP generate the design system components for you.
This is where this library comes into play. It aims to provide a way to create standards-compliant HTML5 documents or document fragments (like atoms, molecules, organisms and components) and automatically generate different output formats for you.
That said, the only output format provided by this library will be HTML5. However, this library uses Language Providers to support output into other formats, such as Twig, React, Vue, and others.
Learn how you can generate components for Twig, React, Vue and others and in the [Advanced Usage Examples](./advanced-examples) section.


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

## Future releases
Find out more on planned future releases in the [Roadmap]().

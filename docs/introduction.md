# The HTML5 Specification as PHP Classes

**Extended HTMLDocument** is a PHP library that provides all HTML elements  as PHP classes, thus an object-oriented approach that aligns with the HTML5 specifications. It's aimed at being more flexible, yet compatible with the underlying [`DOM\HTMLDocument`](https://stitcher.io/blog/html-5-in-php-84) classes introduced in [PHP 8.4](https://www.php.net/manual/en/class.dom-htmldocument.php).

## Why I created this library
This library is inspired by [PicoCSS](https://picocss.com), which is the only CSS Framework, at least that I know of, that does not require CSS classes for it to work. Instead, by relying on plain old HTML5 it accomplished a remarkable clutterless markup.
Working with design systems such as [Figma](https://figma.com) and [Storybook](https://storybook.js.org/), I saw the need to apply the same paradigm there, too. Standardize the markup, by generating it. Focus on design and user experience.

This library allows me to auto-generate all the files, I need for HTML5 atoms, molecules and organisms files needed for settting up Storybook for PicoCSS. At the same time standardizing markup.
All that should change between projects are styles, molecules and organisms, the actual components.

## High-Level Concept
No matter which frontend technologies you use in a project ([Twig](https://twig.symfony.com/), [Blade](https://laravel.com/docs/12.x/blade), [Turbo](https://turbo.hotwired.dev/), [React](https://react.dev/), [Vue](https://vuejs.org/), [Svelte](https://svelte.dev/), [Next](https://nextjs.org/), plain [Javascript](https://developer.mozilla.org/en-US/docs/Web/JavaScript), etc) - what they all have in common is **they all produce HTML**. While HTML5 evolves, it's steady if you compare it to changing project requirements, tech stacks or frontend technologies in general.

**Reasons to standardize your HTML** from a web developers perspective:
- **Less Code**: You write less code, because you don't have to write the same HTML5 elements over and over again.
- **Less Maintenance**: If you wanted to add a new accessibility feature in all of your website projects, could you do it in a single place?
- **Improved Consistency** and **Developer Experience**: Standardized HTML5 markup across projects, makes it easier to comprehend the HTML.
- **Accessibility**: Ensuring that the HTML5 markup is accessible, or that it implements highest standards such as [WCAG](https://www.w3.org/WAI/standards-guidelines/wcag/), [ARIA](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA) by design.
- **Flexibility**: If you can use standardized HTML, you can also generate other file formats for it such as Twig templates or Storybook stories. If you can generate templates for any technology you want, switching or adding technologies to projects becomes less scary.
- **SEO-friendly**: If you establish certain standards for SEO (eg. [Schema.org](https://schema.org/docs/documents.html)), you probably don't want do that over and over again in many websites, but do it once.

::: info
In short, I advocate for using standardized HTML5 markup, in order to having to write less of it and instead generate it. Descriptive, easy to read languages like YAML can help composing compositions of HTML5 elements, such as a search form.
:::

## Where to go next?
- [Features Overview](./features)
- [Getting Started](./getting-started)
- [Basic Usage Examples](./usage-examples)
- [Advanced Usage Examples](./advanced-examples)

## Credits
- This library is heavily inspired by the awesome [PicoCSS](https://picocss.com).
- [Wingsuit](https://wingsuit-designsystem.github.io/) does something similar, especially the part where simple YAML files describe molecules and organisms.
- [hygen](https://github.com/jondot/hygen), is another code generatorNode.js code generator that uses templates to generate code.

<!-- ## Use cases

This library can be useful to PHP Developers in frontend-related contexts, including but not limited to content management systems, templating engines and design systems.
Some examples:
- Instead of writing a Design System for a component library, I can use this library to generate components for me.
- I am a backend developer and don't know all the HTML elements or attributes there are. Auto-completion of your IDE will give you a quick insight into the available elements and attributes.
- I want to work on a Twig Extension, let's say to render `<figure>` elements with `<picture>`, `<img>`, or `<figcaption>`. I can use this library to generate the markup for me, and focus on the content. -->

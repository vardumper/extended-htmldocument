---
# https://vitepress.dev/reference/default-theme-home-page
layout: home
footer: true
hero:
  name: "Extended HTMLDocument"
  text: "Documentation"
  tagline: "This library provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications."
  actions:
    - theme: brand
      text: Getting Started
      link: /intro
    - theme: alt
      text: Usage Examples
      link: /usage-examples

features:
   - title: HTML Elements as PHP Classes
     details: 'HTML5 elements as PHP classes with descriptive names. Added semantics and meta information such as allowed direct children, allowed direct parents and helper methods such as <samp>__toString()</samp> or <samp>setAttributes()</samp>'
   - title: Created to transform HTML
     details: 'This library was created in order to use it for automated code generation. Whether you could have PHP transform HTML into templates for Twig, React, or Vue or generate Atoms and Molecules for a Design System such as Storybook. There are many use cases.'
   - title: Autocompletion in your IDE
     details: 'Thanks to typed constructor arguments, you get autocompletion for all HTML elements in PHP contexts, which is especially useful when working with DOM Documents.'
---

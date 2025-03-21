---
# https://vitepress.dev/reference/default-theme-home-page
layout: home
footer: true
hero:
  name: "Extended HTMLDocument"
  text: "Documentation"
  tagline: "This library provides a way to work with HTML elements in PHP, offering an object-oriented approach that aligns with the HTML5 specifications. Built on top of <samp>DOM\\HTMLDocument</samp>."
  actions:
    - theme: brand
      text: Introduction
      link: /introduction
    - theme: alt
      text: Getting Started
      link: /getting-started
    - theme: alt
      text: Code Examples
      link: /examples

features:
   - title: HTML Elements as PHP Classes
     details: 'HTML5 elements as PHP classes with descriptive names. Added semantics and meta information such as allowed direct children, allowed direct parents and helper methods such as <samp>__toString()</samp> or <samp>setAttributes()</samp>'
   - title: Built to generate Code
     details: 'This library was created in order to use it for automated code generation. Whether you could have PHP transform HTML into templates for Twig, React, or Vue or generate Atoms and Molecules for a Design System such as Storybook.'
   - title: Autocompletion in your IDE
     details: 'Thanks to typed constructor arguments, you get autocompletion for all possible attributes of an HTML element in PHP contexts, which is especially useful when working with DOM Documents.'
---

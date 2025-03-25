# Roadmap

::: info
Current pre-release version is v0.1.4. The first public release will be v0.2.0
:::

## Backlog & Considerations <Badge type="info" text="Ideas" />
- :bulb: Add specific use case examples to the repository (two main priorities: generate Twig & React templates, example YAML format to describe components)
- :bulb: Consider PHP Attributes to improve the code or usage? Thinking mainly of selfClosing, block level or even replace childOf, parentOf methods? Use reflection to resolve relations instead of just using it on a per instance basis.
- :bulb: How to make use of parentOf/childOf? (eg: validation? prevent adding invalid children? allow force? does HTMLDocument check this? Test it.)
- :bulb: Consider using Symfony Serializer and encoder to transform YAML file that describes components into a HTMLDocument or fragment object, or even directly to an output format such as a Twig template. Similar to DOM-ORM where I turned xml into Entity objects and vice versa.
 - :bulb: In order to being able to instantiate an HTML Element class without a DOM, we could create it in its own DOM, and only import it into a different DOM, when needed.
 - :bulb: think about Schema.org schemata and if they should be part of any class or specs
 - 💡consider renaming to HTML.php
 - Investigate WCAG 2.2 and ARIA specs and how to implement them in the library (possibly with separate mixin specs one can recompile things with) `html5-with-aria.yaml`, `html5-with-wcag.yaml`, `html5-with-aria-and-wcag.yaml`
 - Investigate how WCAG can be enforced or HTML can be analyzed (eg. by throwing exceptions when invalid attributes are set), probably requires a long list or matrix of rules. Find inconsistencies,

## Done <Badge type="warning" text="Pre-Release" /> <Badge type="tip" text="0.1.11" />
- Fix inconsistencies in the HTML5 specification
- Add basic functionality and compatibility tests for Delegators
- Mark deprecated attributes (e.g., clear in `<br>`, align in `<hr>`) as deprecated in PHP, too.
- Add chainable setters for all attributes
- Finalize Delegator tests (above 98% yay)
- Fix issues with `body`. doesnt have childOf HTML 2. unique per parent isn't true although its unique per document. Add more tests for this.
- [Handle different kinds of attributes that go by the same name correctly](https://github.com/vardumper/extended-htmldocument/issues/6) (eg. `type` is used in `<button|input>` vs `<link|a|...>` vs `<ol>`). Create an OlTypeEnum, LinkTypeEnum, if needed.
- [Allow for union types for mixed attributes](https://github.com/vardumper/extended-htmldocument/issues/5) - (eg. target which can be both a TargetEnum (_self, _blank, etc.) and a string value)
- [Add getters/setters for all global attributes to HTMLDocumentDelegator](https://github.com/vardumper/extended-htmldocument/issues/2)
- [Add chainable setters to native properties such as `textContent` and `nodeValue` and add a `textContent` param to Element constructor or create() method. Or modify to be createElement with standard signature.](https://github.com/vardumper/extended-htmldocument/issues/7)
- Add missing interfaces, implement all methods from Traits. Add missing tests for these.

## Work in Progress & Pending <Badge type="info" text="Milestone" /> <Badge type="tip" text="0.2.0" />
- [Properly link between relevant sections in the docs](https://github.com/vardumper/extended-htmldocument/issues/4). Add links to external resources where appropriate.
- [Add more examples to the documentation](https://github.com/vardumper/extended-htmldocument/issues/3).
- Allow adding `data-attributes` as array. eg `->setAttrbutes(['data' => ['attribute' => 'value'])` would become `data-attribute="value"`. Also `->setData(['attribute' => 'value'])` should work or `->data = ['attribute' => 'value']`. The same logic or functionality would apply to `aria` and `itemprop` as well.

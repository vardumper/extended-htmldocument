# Roadmap

::: warning
Current version is v0.1.4 (Pre-Release)
:::

## Backlog & Considerations <Badge type="info" text="Ideas" />
- :bulb: Add specific use case examples to the repository (two main priorities: generate Twig & React templates, example YAML format to describe components)
- :bulb: Consider PHP Attributes to improve the code or usage? Thinking mainly of selfClosing, block level or even replace childOf, parentOf methods?
- :bulb: How to make use of parentOf/childOf? (eg: validation? prevent adding invalid children? allow force? does HTMLDocument check this? Test it.)
- :bulb: Consider using Symfony Serializer and encoder to transform YAML file that describes components into a HTMLDocument or fragment object, or even directly to an output format such as a Twig template. Similar to DOM-ORM where I turned xml into Entity objects and vice versa.
 - :bulb: In order to being able to instantiate an HTML Element class without a DOM, we could create it in its own DOM, and only import it, once appended 

## Done <Badge type="warning" text="Pre-Release" /> <Badge type="tip" text="0.1.4" />
- :white_check_mark: Fix inconsistencies in the HTML5 specification
- :white_check_mark: Add basic functionality and compatibility tests for Delegators
- :white_check_mark: Mark deprecated attributes (e.g., clear in `<br>`, align in `<hr>`) as deprecated in PHP, too.
- :white_check_mark: Add chainable setters for all attributes
- :white_check_mark: Finalize Delegator tests (above 98% yay)
- :white_check_mark: Fix issues with `body`. doesnt have childOf HTML 2. unique per parent isn't true although its unique per document. Add more tests for this.

## Pending <Badge type="tip" text="1.0.0" />
- :white_large_square: [Handle different kinds of attributes that go by the same name correctly](https://github.com/vardumper/extended-htmldocument/issues/6) (eg. `type` is used in `<button|input>` vs `<link|a|...>` vs `<ol>`). Create an OlTypeEnum, LinkTypeEnum, if needed.
- :white_large_square: [Allow for union types for mixed attributes](https://github.com/vardumper/extended-htmldocument/issues/5) - (eg. target which can be both a TargetEnum (_self, _blank, etc.) and a string value)
- :white_large_square: [Properly link between relevant sections in the docs](https://github.com/vardumper/extended-htmldocument/issues/4). Add links to external resources where appropriate.
- :white_large_square: [Add more examples to the documentation](https://github.com/vardumper/extended-htmldocument/issues/3).
- :white_large_square: [Add getters/setters for all global attributes to HTMLDocumentDelegator](https://github.com/vardumper/extended-htmldocument/issues/2)

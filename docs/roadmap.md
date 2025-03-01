# Roadmap

## Backlog & Considerations <Badge type="info" text="Ideas" />
- [ ] Add specific use case examples to the repository (two main priorities: generate Twig & React templates, example YAML format to describe components)
- [ ] Consider PHP Attributes to improve the code or usage? Thinking mainly of selfClosing, block level or even replace childOf, parentOf methods?
- [ ] How to make use of parentOf/childOf? (eg: validation? prevent adding invalid children? allow force? does HTMLDocument check this? Test it.)
- [ ] Consider using Symfony Serializer and encoder to transform YAML file that describes components into a HTMLDocument or fragment object, or even directly to an output format such as a Twig template. Similar to DOM-ORM where I turned xml into Entity objects and vice versa.


### Done <Badge type="warning" text="Pre-Release" />
- :white_check_mark: Fix inconsistencies in the HTML5 specification
- :white_check_mark: Add basic functionality and compatibility tests for DOM\HTMLDocument and DOM\HTMLElement

## Pending <Badge type="tip" text="1.0.0" />
- : Allow for union types for mixed attributes (eg. target which can be both a TargetEnum (_self, _blank, etc.) and a string value)
-[ ] Add basic functionality and compatibility tests with DOM\HTMLDocument and DOM\HTMLElement
- [ ] Remove deprecated or missing attributes (e.g., clear in <br>, align in <hr>) which are obsolete in HTML5

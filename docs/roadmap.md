# Roadmap

## Backlog & Considerations
- [ ] Add specific use case examples to the repository (two main priorities: generate Twig & React templates, example YAML format to describe components)
- [ ] Consider PHP Attributes to improve the code or usage? Thinking mainly of selfClosing, block level or even replace childOf, parentOf methods?
- [ ] How to make use of parentOf/childOf? (eg: validation? prevent adding invalid children? allow force? does HTMLDocument check this? Test it.)

## Version 1.0.0
- [ ] Allow for union types for mixed attributes (eg. target which can be both a TargetEnum (_self, _blank, etc.) and a string value)
- [ ] Add basic functionality and compatibility tests with DOM\HTMLDocument and DOM\HTMLElement
- [ ] Remove deprecated or missing attributes (e.g., clear in <br>, align in <hr>) are obsolete in HTML5

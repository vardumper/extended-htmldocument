# The HTML5 Specification as YAML

The heart of this library is the HTML5 specification [`Resources/definitions/html5.yaml`](https://github.com/vardumper/extended-htmldocument/blob/main/src/Resources/definitions/html5.yaml). It is used to generate the PHP classes that represent each HTML element.

The generated PHP classes can be found here:
- [`HTML\Element\Block`](https://github.com/vardumper/extended-htmldocument/tree/main/src/Element/Block) block level elements (h1, h2, table, div, etc.)
- [`HTML\Element\Inline`](https://github.com/vardumper/extended-htmldocument/tree/main/src/Element/Inline) inline elements (a, span, strong, etc.)
- [`HTML\Element\Void`](https://github.com/vardumper/extended-htmldocument/tree/main/src/Element/Void) void elements that are invisible or not styleable (head, meta, etc).

Read more about these PHP classes in the [Element Classes](./elements) section.

## Examples from the YAML Specification
### Blockquote
```yaml
blockquote:
  name: Blockquote
  description: 'The blockquote element represents a section that is quoted from another source. Content inside a blockquote must be quoted from another source, whose address, if it has one, may be cited in the cite attribute.'
  level: block
  unique: false
  attributes:
    cite:
      description: 'Specifies the URL of the cited work or the name of the cited creative work.'
      type: uri
      elements:
        - blockquote
        - del
        - ins
        - q
  children:
    - p
```
Straight forward. It tells us what the element called, what it's used for, if its a block, inline or void element, what attributes it can have, on which other elements a specific attribute can be used and what children the element can have. Unlike the `<body>` or the `<main>` element it doesn't have to be unique, you can add as many blockquotes to a HTML page as you like...

### Anchor
An elemet with slightly more attributes, but still easy to understand.
```yaml
a:
  name: Anchor
  description: 'The a element represents a hyperlink, linking to another resource.'
  level: inline
  unique: false
  attributes:
    download:
      description: 'Indicates that the linked content should be downloaded rather than displayed.'
      type: string
      elements:
        - a
        - area
    href:
      description: 'Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.'
      type: uri
      required: true
      elements:
        - a
        - area
        - base
        - link
    hreflang:
      description: 'Specifies the language of the linked resource.'
      type: language_iso
      elements:
        - a
        - area
        - link
    rel:
      description: 'Specifies the relationship between the current document and the linked document.'
      type: enum
      choices:
        - alternate
        - author
        - bookmark
        - canonical
        - help
        - icon
        - license
        - next
        - nofollow
        - noreferrer
        - prefetch
        - prev
        - search
        - stylesheet
        - tag
      elements:
        - a
        - area
        - link
    target:
      description: 'Specifies where to open the linked document.'
      type: enum
      choices:
        - _blank
        - _parent
        - _self
        - _top
        - framename
      elements:
        - a
        - area
        - base
        - form
    title:
      description: 'Specifies additional information about the element, typically displayed as a tooltip.'
      type: string
      elements:
        - a
        - abbr
        - area
        - audio
        - button
        - details
        - iframe
        - img
        - input
        - map
        - object
        - progress
        - span
        - strong
        - sub
        - sup
        - svg
        - time
        - video
    type:
      description: 'Specifies the media type of the linked resource.'
      type: enum
      elements:
        - a
        - area
        - button
        - input
        - link
        - object
        - script
        - source
        - style
```

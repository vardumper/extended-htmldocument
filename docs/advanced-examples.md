# Advanced Usage Examples

## Working with Design Systems

Imagine the following format for teaser molecule and a teaser_container organism:

```yaml
molecules:
  teaser:
    division:
      class: teaser
      heading3: Teaser Headline
      image:
        src: https://via.placeholder.com/150
        alt: Placeholder Image
      paragraph: This is a teaser paragraph that gives a brief introduction to the content. It is meant to capture attention and encourage further reading.
      anchor:
        href: '#'
        role: button
        class: primary

organisms:
    teaser_container:
      division:
        class: grid
        '@molecules.teaser'
        '@molecules.teaser'
        '@molecules.teaser'
```

This is just an example. In the real world, molecule and organism descriptions could be way more complex.
Anyways, the description of teaser and teaser container is sufficient to have this library generate the HTML for you.

```php
use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Division;
use Html\Element\Block\Heading3;
use Html\Element\Block\Paragraph;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Image;

$data = yaml_parse_file('path/to/your/design-system.yaml');
$dom = HTMLDocumentDelegator::createEmpty();

forach($data['molecules'] as $id => $molecule) {
    $teaser = $dom->createElement('div');
    $teaser->setAttributes(['class' => 'teaser
}
```

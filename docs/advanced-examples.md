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
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('path/to/your/design-system.yaml');
$dom = HTMLDocumentDelegator::createEmpty();

foreach ($data['molecules'] as $id => $molecule) {
    $teaser = $dom->createElement('div');
    $teaser->setAttributes(['class' => $molecule['division']['class'] ?? null]);

    $headline = $dom->createElement('h3');
    $headline->setTextContent($molecule['division']['heading3']);
    $teaser->appendChild($headline);

    $image = $dom->createElement('img');
    $image->setAttributes([
        'src' => $molecule['division']['image']['src'],
        'alt' => $molecule['division']['image']['alt'],
    ]);
    $teaser->appendChild($image);

    $paragraph = $dom->createElement('p');
    $paragraph->setTextContent($molecule['division']['paragraph']);
    $teaser->appendChild($paragraph);

    $anchor = $dom->createElement('a');
    $anchor->setAttributes([
        'href' => $molecule['division']['anchor']['href'],
        'role' => $molecule['division']['anchor']['role'],
        'class' => $molecule['division']['anchor']['class'],
    ]);
    $teaser->appendChild($anchor);
}
```

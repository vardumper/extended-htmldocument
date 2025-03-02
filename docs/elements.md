# Element Classes

## Auto-generated PHP classes

This library itself uses code-generation to create the PHP classes. It uses a standardized YAML file (`src/Resources/definitions/html5.yaml`) and passes its data to a template file (eg. `src/Resources/templates/BlockElement.tpl.php`) to generate the PHP classes.

## What does a class look like?

The element classes are straight forward:. Let's take a look at the [Anchor](https://github.com/vardumper/extended-htmldocument/blob/main//src/Element/Inline/Anchor.php) class:

```php
namespace Html\Element\Inline;

use Html\Element\InlineElement;
...
use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;

class Anchor extends InlineElement
{
    /** The HTML element name */
    public const string QUALIFIED_NAME = 'a';

    /** If an element is unique per HTML document */
    public static bool $unique = false;

    /** If an element is allowed once its allowed parents */
    public static bool $uniquePerParent = false;

    /** The list of allowed direct parents. Any if empty.
     * @var array<string> */
    public static array $childOf = [
        Address::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        MarkedText::class,
        Navigation::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /** The list of allowed direct children. Any if empty.
     * @var array<string> */
    public static array $parentOf = [
    ];


    /** Indicates that the linked content should be downloaded rather than displayed. */
    public ?string $download = null;

    /** Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @category HTML attribute */
    public ?string $href = null;

    /** Specifies the language of the linked resource. */
    public ?string $hreflang = null;

    /** Specifies the relationship between the current document and the linked document. */
    protected ?RelEnum $rel = null;

    /** Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self */
    protected ?TargetEnum $target = null;

    /** Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title = null;

    /** Specifies the media type of the linked resource. */
    public ?string $type = null;

    public function setDownload(string $download): self
    {
        $this->download = $download;
        return $this;
    }

    public function getDownload(): ?string
    {
        return $this->download;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(string $hreflang): self
    {
        $this->hreflang = $hreflang;
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setRel(RelEnum $rel): self
    {
        $this->rel = $rel;
        $this->htmlElement->setAttribute('rel', $rel->value);
        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setTarget(TargetEnum $target): self
    {
        $this->target = $target;
        $this->htmlElement->setAttribute('target', $target->value);
        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

}
```

As you can see there is no logic or functionality in the class itself. It only provides meta information about the element, such as its name, attributes, and info on direct parent/child relationships.

## Delegator classes

Since `DOM\HTMLElement` is a final class, we cannot extend it. Instead, we use a delegator pattern to provide the same functionality.

* [DOMNodeDelegator](https://github.com/vardumper/extended-htmldocument/blob/main//src/Delegator/DOMNodeDelegator.php)
* [DOMNodeListDelegator](https://github.com/vardumper/extended-htmldocument/blob/main//src/Delegator/DOMNodeListDelegator.php)
* [HTMLDocumentDelegator](https://github.com/vardumper/extended-htmldocument/blob/main//src/Delegator/HTMLDocumentDelegator.php)
* [HTMLElementDelegator](https://github.com/vardumper/extended-htmldocument/blob/main//src/Delegator/HTMLElementDelegator.php)

These delegator classes are used to provide the same functionality as the `DOM\HTMLElement` class, like appending an instance to a DOM, or to access its parent or appendChildren, etc.
At the same time, we are able to add new methods, which is the main goal of this library. For example, the `__toString()` method, which is not available in the `DOM\HTMLElement` class.

## Real world use cases
The goal of this library is to provide a way to transform HTML5 standards-compliant HTML documents and/or document fragments (so called atoms, molecules, organisms and components) into different templating engines or frontend technologies, such as Twig, React, Vue or others.

See the [advanced usage examples](./advanced-examples) for some real-world PHP code.

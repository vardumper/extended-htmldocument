# Element Classes

## Auto-generated PHP classes

This library itself uses code-generation to create the PHP classes. It uses a standardized YAML file (`src/Resources/specifications/html5.yaml`) and passes its data to a template file (eg. `src/Resources/templates/BlockElement.tpl.php`) to generate the PHP classes.

## What does a class look like?

The element classes are straightforward. Let's take a look at the [Anchor](https://github.com/vardumper/extended-htmldocument/blob/main/src/Element/Inline/Anchor.php) class:

```php
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Enum\{ARoleEnum, RelEnum, TargetEnum};
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;

#[Element('a')]
class Anchor extends InlineElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\SlotTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    // ... further global attribute traits (aria-*, alpine x-*, ...)

    /** The HTML element name */
    public const string QUALIFIED_NAME = 'a';

    /** If an element is self closing */
    public const bool SELF_CLOSING = false;

    /** If an element is unique per HTML document */
    public static bool $unique = false;

    /** If an element is allowed once in its allowed parents */
    public static bool $uniquePerParent = false;

    /** The list of allowed direct parents. Any if empty.
     * @var array<class-string> */
    public static array $childOf = [
        Article::class,
        Aside::class,
        Body::class,
        // ...
        Template::class,
    ];

    /** The list of allowed direct children. Any if empty.
     * @var array<class-string> */
    public static array $parentOf = [];

    /** Indicates that the linked content should be downloaded rather than displayed. */
    protected ?string $download = null;

    /** Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required */
    protected ?string $href = null;

    /** Specifies the language of the linked resource. */
    protected ?string $hreflang = null;

    /** Specifies the relationship between the current document and the linked document. */
    protected ?RelEnum $rel = null;

    /** Specifies where to open the linked document.
     * @example _self */
    protected null|string|TargetEnum $target = null;

    public function setHref(string $href): static
    {
        $this->href = $href;
        $this->delegated->setAttribute('href', $href);
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setRel(string|RelEnum $rel): static
    {
        if (\is_string($rel)) {
            $rel = RelEnum::tryFrom($rel) ?? throw new InvalidArgumentException('Invalid value for $rel.');
        }
        $this->rel = $rel;
        $this->delegated->setAttribute('rel', (string) $rel->value);

        return $this;
    }

    // ... getters and setters for the remaining attributes
}
```

The class provides meta information about the element, such as its name, attributes, and info on direct parent/child relationships. Semantic setters are provided by the class itself and by global attribute traits (eg. `ClassTrait`, `DataTrait`); all DOM operations are delegated to the underlying `DOM\HTMLElement` instance.

## Delegator classes

Since `DOM\HTMLElement` is a final class, we cannot extend it. Instead, we use a delegator pattern to provide the same functionality.

* [NodeDelegator](https://github.com/vardumper/extended-htmldocument/blob/main/src/Delegator/NodeDelegator.php)
* [NodeListDelegator](https://github.com/vardumper/extended-htmldocument/blob/main/src/Delegator/NodeListDelegator.php)
* [HTMLDocumentDelegator](https://github.com/vardumper/extended-htmldocument/blob/main/src/Delegator/HTMLDocumentDelegator.php)
* [HTMLElementDelegator](https://github.com/vardumper/extended-htmldocument/blob/main/src/Delegator/HTMLElementDelegator.php)

These delegator classes are used to provide the same functionality as the `DOM\HTMLElement` class, like appending an instance to a DOM, or to access its parent or appendChild, etc.
At the same time, we are able to add new methods, which is the main goal of this library. For example, the `__toString()` method, which is not available in the `DOM\HTMLElement` class.

## Real world use cases
The goal of this library is to provide a way to transform HTML5 standards-compliant HTML documents and/or document fragments (so called atoms, molecules, organisms and components) into different templating engines or frontend technologies, such as Twig, React, Vue or others.

See the [advanced usage examples](./advanced-examples) for some real-world PHP code.

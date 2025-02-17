<?php
/**
 * Anchor
 *
 * @package Html\Element
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 * @description The a element represents a hyperlink, linking to another resource.
 */
namespace Html\Element;

use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;
use Html\Model\InlineElement;

class Anchor extends InlineElement
{
    public static string $qualifiedName = 'a';

    /*
     * Indicates that the linked content should be downloaded rather than displayed.
     * @example filename.pdf
     * @deprecated */
    public ?string $download;

    /* Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used. */
    public string $href;

    /*
     * Specifies the language of the linked resource.
     * @example en */
    public ?string $hreflang;

    /* Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel;

    /*
     * Specifies where to open the linked document.
     * @example _self */
    public null|string|TargetEnum $target;

    /* Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

    /** required if a class has Enums */
    // public function __set($name, $value): void
    // {
    //     // Transform Enum values to their underlying value
    //     if ($value instanceof BackedEnum) {
    //         $value = $value->value;
    //         $this->setAttribute($name, $value);
    //     }

    //     // Set the property on the object
    //     $reflection = new \ReflectionClass($this);
    //     if ($reflection->hasProperty($name)) {
    //         $property = $reflection->getProperty($name);
    //         $property->setAccessible(true);
    //         $property->setValue($this, $value);
    //     }

        // Always set the attribute on the underlying DOM element
        // $this->setAttribute($name, $value);
    // }
    // // Static factory method that creates the DOM element, then passes it to the parent constructor
    // public static function create(ExtendedHTMLDocument $dom): self
    // {
    //     $coreElement = $dom->htmlDocument->createElement(self::$qualifiedName); // Make sure this call returns a DOM\HtmlElement, not an HTMLElementDelegator:

    //     return new self($coreElement); // Now wrap it in your HTMLElementDelegator logic:
    // }
}

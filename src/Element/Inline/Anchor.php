<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Anchor - The a element represents a hyperlink, linking to another resource.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 */
namespace Html\Element\Inline;

use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;
use Html\Model\InlineElement;

class Anchor extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'a';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Indicates that the linked content should be downloaded rather than displayed.
     * @category HTML attribute
     * @example filename.pdf
     */
    public ?string $download;

    /** 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @category HTML attribute
     * @required
     */
    public string $href;

    /** 
     * Specifies the language of the linked resource.
     * @category HTML attribute
     * @example en
     */
    public ?string $hreflang;

    /** 
     * Specifies the relationship between the current document and the linked document.
     * @category HTML attribute */
    public ?RelEnum $rel;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    public ?TargetEnum $target;

    /** 
     * Specifies additional information about the element, typically displayed as a tooltip.
     * @category HTML attribute */
    public ?string $title;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}

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

use Html\Element\InlineElement;
use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;

class Anchor extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'a';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


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

    /** Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    public ?TargetEnum $target;

    /** Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title;

    /** Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

}

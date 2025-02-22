<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 */
namespace Html\Element\Void;

use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\RelEnum;
use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Link extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'link';

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
     * 
     * @category HTML attribute */
    public ?CrossoriginEnum $crossorigin;

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
     * Specifies the integrity value of a resource.
     * @category HTML attribute */
    public ?string $integrity;

    /** 
     * Specifies the media type for which the linked resource or style sheet is intended.
     * @category HTML attribute */
    public ?string $media;

    /** 
     * Specifies the referrer policy for fetches initiated by the element.
     * @category HTML attribute */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /** 
     * Specifies the relationship between the current document and the linked document.
     * @category HTML attribute */
    public ?RelEnum $rel;

    /** 
     * Specifies the sizes of the images or icons for different display/window sizes.
     * @category HTML attribute */
    public ?string $sizes;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
 */
namespace Html\Element\Void;

use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Source extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'source';

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
     * Specifies the media type for which the linked resource or style sheet is intended.
     * @category HTML attribute */
    public ?string $media;

    /** 
     * Specifies the sizes of the images or icons for different display/window sizes.
     * @category HTML attribute */
    public ?string $sizes;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}

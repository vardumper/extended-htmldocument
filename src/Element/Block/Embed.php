<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Embed - The embed element provides an integration point for an external (typically non-HTML) application or interactive content.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
 */
namespace Html\Element\Block;

use Html\Enum\TypeEnum;
use Html\Model\BlockElement;

class Embed extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'embed';

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
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $height;

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

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $width;

}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HorizontalRule - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 */
namespace Html\Element\Block;

use Html\Enum\AlignEnum;
use Html\Model\BlockElement;

class HorizontalRule extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'hr';

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
     * Specifies the horizontal alignment of the element.
     * @category HTML attribute */
    public ?AlignEnum $align;

    /** 
     * 
     * @category HTML attribute */
    public ?string $color;

    /** 
     * 
     * @category HTML attribute */
    public ?bool $noshade;

    /** 
     * Specifies the height of a hr element in pixels.
     * @category HTML attribute */
    public ?int $size;

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $width;

}

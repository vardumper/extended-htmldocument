<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * HorizontalRule - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 */

namespace Html\Element\Block;

use Html\Enum\AlignEnum;
use Html\Model\BlockElement;

final class HorizontalRule extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'hr';

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
    public static array $childOf = [];

    /**
     * Specifies the horizontal alignment of the element.
     */
    public ?AlignEnum $align;

    public ?string $color;

    public ?bool $noshade;

    /**
     * Specifies the height of a hr element in pixels.
     */
    public ?int $size;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width;
}

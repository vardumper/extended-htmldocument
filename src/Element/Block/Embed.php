<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Embed - The embed element provides an integration point for an external (typically non-HTML) application or interactive content.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
 */

namespace Html\Element\Block;

use Html\Enum\TypeEnum;
use Html\Model\BlockElement;

final class Embed extends BlockElement
{
    public static string $qualifiedName = 'embed';

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /*
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;
}

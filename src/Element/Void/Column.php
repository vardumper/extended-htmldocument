<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Column - The col element represents a column in a table.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 */

namespace Html\Element\Void;

use Html\Model\VoidElement;

final class Column extends VoidElement
{
    public static string $qualifiedName = 'col';

    /* Specifies the number of columns the <col> element should span in a table. */
    public ?int $span;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;
}

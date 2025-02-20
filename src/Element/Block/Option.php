<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Option - The option element represents an item in a select dropdown list.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Option extends BlockElement
{
    public static string $qualifiedName = 'option';

    /* When present, it specifies that an input element should be disabled. */
    public ?bool $disabled;

    /*  */
    public ?string $dummy;

    /* Specifies a label for the associated form control, option group, or option. */
    public ?string $label;

    /* When present, it specifies that an option should be pre-selected when the page loads. */
    public ?bool $selected;

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;
}

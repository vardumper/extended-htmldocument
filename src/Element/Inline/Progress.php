<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Progress - The progress element represents the completion progress of a task.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Progress extends InlineElement
{
    public static string $qualifiedName = 'progress';

    /* Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max;

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;
}

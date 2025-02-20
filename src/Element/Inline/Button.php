<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 */

namespace Html\Element\Inline;

use Html\Enum\TypeEnum;
use Html\Model\InlineElement;

final class Button extends InlineElement
{
    public static string $qualifiedName = 'button';

    /* When present, it specifies that an element should automatically get focus when the page loads. */
    public ?bool $autofocus;

    /* When present, it specifies that an input element should be disabled. */
    public ?bool $disabled;

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;
}

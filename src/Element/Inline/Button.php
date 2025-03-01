<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 *
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 */

namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Enum\TypeEnum;

class Button extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'button';

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that an element should automatically get focus when the page loads.
     */
    public ?bool $autofocus = null;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?TypeEnum $type = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;
}

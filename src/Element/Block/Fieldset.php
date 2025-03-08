<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Fieldset - The fieldset element represents a set of form controls optionally grouped under a common name.
 *
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Label;
use Html\Element\Inline\Meter;
use Html\Element\Inline\Output;
use Html\Element\Inline\Progress;
use Html\Element\Inline\Select;
use Html\Element\Inline\Textarea;

class Fieldset extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'fieldset';

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
    public static array $childOf = [Body::class, Form::class, Paragraph::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Button::class,
        DataList::class,
        Input::class,
        Label::class,
        Legend::class,
        Meter::class,
        Output::class,
        Progress::class,
        Select::class,
        Textarea::class,
    ];
}

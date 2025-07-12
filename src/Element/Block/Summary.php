<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Summary - The summary element represents a summary, caption, or legend for the rest of the contents of the summary element's parent details element, if any.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Mapping\Element;

#[Element('summary')]
class Summary extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'summary';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Details::class,
        Aside::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Form::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];
}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * PreformattedText - The pre element represents preformatted text. Text within this element is typically displayed in a non-proportional font exactly as it is laid out in the file.
 *
 * @generated 2025-10-26 20:40:54
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Slot;
use Html\Mapping\Element;

#[Element('pre')]
class PreformattedText extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'pre';

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
    public static array $childOf = [
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
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

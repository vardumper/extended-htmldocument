<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Heading2 - The h2 element represents a section heading. It has the second highest rank among the six levels of section headings.
 *
 * @generated 2025-03-21 21:04:01
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h2
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Slot;

class Heading2 extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'h2';

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
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        HeadingsGroup::class,
        Legend::class,
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

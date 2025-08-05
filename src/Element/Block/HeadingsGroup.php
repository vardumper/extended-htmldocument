<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * HeadingsGroup - The hgroup element represents a multi-level heading for a section of a document. It groups a set of h1–h6 elements.
 *
 * @generated 2025-08-05 06:09:38
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hgroup
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Mapping\Element;

#[Element('hgroup')]
class HeadingsGroup extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'hgroup';

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
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
    ];
}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * NoScript - The noscript element defines an alternate content for users that have disabled scripts in their browser or have a browser that doesn't support script.
 *
 * @generated 2025-10-23 23:06:19
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Void\Head;
use Html\Mapping\Element;

#[Element('noscript')]
class NoScript extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'noscript';

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
    public static array $childOf = [Body::class, Form::class, Head::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];
}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * NoScript - The noscript element defines an alternate content for users that have disabled scripts in their browser or have a browser that doesn't support script.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class NoScript extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'noscript';

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
}

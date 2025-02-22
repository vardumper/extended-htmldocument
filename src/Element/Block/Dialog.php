<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Dialog - The dialog element represents a part of an application that a user interacts with to perform a task, for example a dialog box, inspector, or window.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Dialog extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'dialog';

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
     * When present, it specifies that the details should be visible (open) to the user.
     */
    public ?bool $open;
}

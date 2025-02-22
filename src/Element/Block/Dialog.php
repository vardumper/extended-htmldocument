<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Dialog - The dialog element represents a part of an application that a user interacts with to perform a task, for example a dialog box, inspector, or window.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Dialog extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'dialog';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * When present, it specifies that the details should be visible (open) to the user.
     * @category HTML attribute */
    public ?bool $open;

}

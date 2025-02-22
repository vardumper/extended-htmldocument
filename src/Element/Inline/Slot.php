<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Slot - The slot element is a placeholder inside a web component that you can fill with your own markup, which lets you create separate DOM trees and present them together.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/slot
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Slot extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'slot';

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
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

}

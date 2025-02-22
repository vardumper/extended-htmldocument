<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Progress - The progress element represents the completion progress of a task.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Progress extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'progress';

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
     * Specifies the maximum value for an input element, meter, or progress element.
     * @category HTML attribute */
    public ?int $max;

    /** 
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     * @category HTML attribute */
    public ?string $value;

}

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

use Html\Element\InlineElement;

class Progress extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'progress';

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
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;

}

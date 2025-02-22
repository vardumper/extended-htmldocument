<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Parameter - The param element defines parameters for an object element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
 */
namespace Html\Element\Void;

use Html\Model\VoidElement;

class Parameter extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'param';

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

    /** 
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     * @category HTML attribute */
    public ?string $value;

}

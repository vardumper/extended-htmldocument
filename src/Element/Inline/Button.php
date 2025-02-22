<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 */
namespace Html\Element\Inline;

use Html\Enum\TypeEnum;
use Html\Model\InlineElement;

class Button extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'button';

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
     * When present, it specifies that an element should automatically get focus when the page loads.
     * @category HTML attribute */
    public ?bool $autofocus;

    /** 
     * When present, it specifies that an input element should be disabled.
     * @category HTML attribute */
    public ?bool $disabled;

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

    /** 
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     * @category HTML attribute */
    public ?string $value;

}

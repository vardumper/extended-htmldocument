<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 */
namespace Html\Element\Block;

use Html\Enum\AutocompleteEnum;
use Html\Enum\EnctypeEnum;
use Html\Enum\MethodEnum;
use Html\Enum\TargetEnum;
use Html\Model\BlockElement;

class Form extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'form';

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
     * Specifies the character encodings that are to be used for form submission.
     * @category HTML attribute */
    public ?string $acceptCharset;

    /** 
     * Specifies the URL where the form data should be submitted when the form is submitted.
     * @category HTML attribute */
    public ?string $action;

    /** 
     * 
     * @category HTML attribute */
    public ?AutocompleteEnum $autocomplete;

    /** 
     * 
     * @category HTML attribute */
    public ?EnctypeEnum $enctype;

    /** 
     * 
     * @category HTML attribute */
    public ?MethodEnum $method;

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

    /** 
     * When present, it specifies that a form should not be validated when submitted.
     * @category HTML attribute */
    public ?bool $novalidate;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    public ?TargetEnum $target;

}

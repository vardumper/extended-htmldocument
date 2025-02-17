<?php
/**
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 */
namespace Html\Element\Block;

use Html\Enum\AutocompleteEnum;
use Html\Enum\EnctypeEnum;
use Html\Enum\MethodEnum;
use Html\Enum\TargetEnum;
use Html\Model\BlockElement;

class Form extends BlockElement
{
    public static string $qualifiedName = 'form';

    /* Specifies the character encodings that are to be used for form submission. */
    public ?string $accept-charset;

    /* Specifies the URL where the form data should be submitted when the form is submitted. */
    public ?string $action;

    /*  */
    public ?AutocompleteEnum $autocomplete;

    /*  */
    public ?EnctypeEnum $enctype;

    /*  */
    public ?MethodEnum $method;

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* When present, it specifies that a form should not be validated when submitted. */
    public ?bool $novalidate;

    /* 
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target;


    public function __construct()
    {

    }


}
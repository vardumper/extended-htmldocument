<?php
/**
 * Output - The output element represents the result of a calculation or user action.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Output extends InlineElement
{
    public static string $qualifiedName = 'output';

    /* Refers to the <datalist> element that contains the options for an input element. */
    public ?string $for;


    public function __construct()
    {

    }


}
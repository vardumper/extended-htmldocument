<?php
/**
 * BreakElement - The br element represents a line break.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
 */
namespace Html\Element\Void;

use Html\Enum\ClearEnum;
use Html\Model\VoidElement;

final class BreakElement extends VoidElement
{
    public static string $qualifiedName = 'br';

    /*  */
    public ?ClearEnum $clear;


    public function __construct()
    {

    }


}
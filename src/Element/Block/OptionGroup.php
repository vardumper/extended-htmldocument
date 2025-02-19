<?php
/**
 * OptionGroup - The optgroup element represents a group of option elements with a common label.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

final class OptionGroup extends BlockElement
{
    public static string $qualifiedName = 'optgroup';

    /* When present, it specifies that an input element should be disabled. */
    public ?bool $disabled;

    /* Specifies a label for the associated form control, option group, or option. */
    public ?string $label;


    public function __construct()
    {

    }


}
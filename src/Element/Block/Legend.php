<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Legend - The legend element represents a caption for the content of its parent fieldset.
 * 
 * @generated 2025-10-28 11:32:29
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Form;
use Html\Element\Block\Heading1;
use Html\Element\Block\Heading2;
use Html\Element\Block\Heading3;
use Html\Element\Block\Heading4;
use Html\Element\Block\Heading5;
use Html\Element\Block\Heading6;
use Html\Mapping\Element;

#[Element('legend')]
class Legend extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'legend';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Fieldset::class,
        Form::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
    ];




}

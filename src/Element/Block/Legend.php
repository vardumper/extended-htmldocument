<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Legend - The legend element represents a caption for the content of its parent fieldset.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 */
namespace Html\Element\Block;

use Html\Element\Block\Fieldset;
use Html\Model\BlockElement;

class Legend extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'legend';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = true;

    /**
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [
        Fieldset::class,
    ];

    /** 
     * Specifies the default value of the <textarea> element.
     * @category HTML attribute */
    public ?string $text;

}

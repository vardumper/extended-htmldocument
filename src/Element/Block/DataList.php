<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DataList - The datalist element contains a set of option elements that represent the permissible or recommended options available to users.
 * 
 * @generated 2025-10-26 23:58:50
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Body;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Form;
use Html\Element\Block\Option;
use Html\Mapping\Element;

#[Element('datalist')]
class DataList extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'datalist';

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
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Body::class,
        Fieldset::class,
        Form::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Option::class,
    ];




}

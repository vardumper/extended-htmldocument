<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DefinitionTerm - The dt element represents the term, or name, part of a term-description group in a description list (dl element).
 * 
 * @generated 2025-10-28 11:32:29
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Aside;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Section;
use Html\Mapping\Element;

#[Element('dt')]
class DefinitionTerm extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'dt';

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
        DefinitionList::class,
        Aside::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];




}

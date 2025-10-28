<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Details - The details element represents a disclosure widget from which the user can obtain additional information or controls.
 * 
 * @generated 2025-10-28 11:32:29
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\OrderedList;
use Html\Element\Block\Paragraph;
use Html\Element\Block\PreformattedText;
use Html\Element\Block\Section;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\Template;
use Html\Element\Block\UnorderedList;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Mapping\Element;

#[Element('details')]
class Details extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'details';

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
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Form::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Division::class,
        DefinitionList::class,
        Form::class,
        ListItem::class,
        OrderedList::class,
        Paragraph::class,
        PreformattedText::class,
        Summary::class,
        Table::class,
        UnorderedList::class,
    ];


    /** When present, it specifies that the details should be visible (open) to the user. */
    public ?bool $open = null;


    public function setOpen(bool $open): static
    {
        $this->open = $open;
        $this->delegated->setAttribute('open', (string) $open);
        return $this;
    }

    public function getOpen(): ?bool
    {
        return $this->open;
    }


}

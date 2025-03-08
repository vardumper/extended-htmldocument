<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Dialog - The dialog element represents a part of an application that a user interacts with to perform a task, for example a dialog box, inspector, or window.
 * 
 * @generated 2025-03-08 16:37:58
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\Details;
use Html\Element\Block\Division;
use Html\Element\Block\Form;
use Html\Element\Block\Heading1;
use Html\Element\Block\Heading2;
use Html\Element\Block\Heading3;
use Html\Element\Block\Heading4;
use Html\Element\Block\Heading5;
use Html\Element\Block\Heading6;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\ListItem;
use Html\Element\Block\OrderedList;
use Html\Element\Block\Paragraph;
use Html\Element\Block\PreformattedText;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\UnorderedList;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Select;
use Html\Element\Inline\Textarea;

class Dialog extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'dialog';

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
        Form::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Button::class,
        Division::class,
        DefinitionList::class,
        Form::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
        Anchor::class,
        Input::class,
        Select::class,
        Textarea::class,
        Details::class,
        Summary::class,
        InlineFrame::class,
        ListItem::class,
        OrderedList::class,
        Paragraph::class,
        PreformattedText::class,
        Table::class,
        UnorderedList::class,
    ];


    /** When present, it specifies that the details should be visible (open) to the user. */
    public ?bool $open = null;


    public function setOpen(bool $open): self
    {
        $this->open = $open;
        return $this;
    }

    public function getOpen(): ?bool
    {
        return $this->open;
    }


}

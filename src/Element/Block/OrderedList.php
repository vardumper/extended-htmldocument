<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * OrderedList - The ol element represents an ordered list of items. The order of the list is meaningful.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Details;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\Inline\Slot;
use Html\Enum\TypeEnum;

class OrderedList extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'ol';

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
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
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
        ListItem::class,
    ];


    /** When present, it specifies that the list order should be descending (9,8,7...). */
    public ?bool $reversed = null;

    /** Specifies the starting value of an ordered list. */
    public ?int $start = null;

    /** Specifies the numbering type of the ordered list. */
    protected ?TypeEnum $type = null;


    public function setReversed(bool $reversed): self
    {
        $this->reversed = $reversed;
        return $this;
    }

    public function getReversed(): ?bool
    {
        return $this->reversed;
    }

    public function setStart(int $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setType(TypeEnum $type): self
    {
        $this->type = $type;
        $this->htmlElement->setAttribute('type', $type->value);
        return $this;
    }

    public function getType(): ?TypeEnum
    {
        return $this->type;
    }


}

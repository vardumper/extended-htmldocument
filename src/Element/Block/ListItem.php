<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ListItem - The li element represents a list item. If its parent element is an ol, ul, or menu, then the element is an item of the parent element's list, as defined for those elements. Otherwise, the list item has no defined list-related semantics.
 *
 * @generated 2025-10-31 21:58:00
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Abbreviation;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Code;
use Html\Element\Inline\Data;
use Html\Element\Inline\Definition;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Italic;
use Html\Element\Inline\KeyboardInput;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\SampleOutput;
use Html\Element\Inline\Slot;
use Html\Element\Inline\Small;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Element\Inline\Subscript;
use Html\Element\Inline\Superscript;
use Html\Element\Inline\Time;
use Html\Element\Inline\Underline;
use Html\Element\Inline\Variable;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute\AccesskeyTrait;
use Html\Trait\GlobalAttribute\AutocapitalizeTrait;
use Html\Trait\GlobalAttribute\AutofocusTrait;
use Html\Trait\GlobalAttribute\ClassTrait;
use Html\Trait\GlobalAttribute\ContenteditableTrait;
use Html\Trait\GlobalAttribute\DataTrait;
use Html\Trait\GlobalAttribute\DirTrait;
use Html\Trait\GlobalAttribute\DraggableTrait;
use Html\Trait\GlobalAttribute\HiddenTrait;
use Html\Trait\GlobalAttribute\IdTrait;
use Html\Trait\GlobalAttribute\InputmodeTrait;
use Html\Trait\GlobalAttribute\LangTrait;
use Html\Trait\GlobalAttribute\SpellcheckTrait;
use Html\Trait\GlobalAttribute\StyleTrait;
use Html\Trait\GlobalAttribute\TabindexTrait;
use Html\Trait\GlobalAttribute\TitleTrait;
use Html\Trait\GlobalAttribute\TranslateTrait;

#[Element('li')]
class ListItem extends BlockElement
{
    use AccesskeyTrait;

    use AutocapitalizeTrait;

    use AutofocusTrait;

    use ClassTrait;

    use ContenteditableTrait;

    use DataTrait;

    use DirTrait;

    use DraggableTrait;

    use HiddenTrait;

    use IdTrait;

    use InputmodeTrait;

    use LangTrait;

    use SpellcheckTrait;

    use StyleTrait;

    use TabindexTrait;

    use TitleTrait;

    use TranslateTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'li';

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
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        Menu::class,
        OrderedList::class,
        Section::class,
        Slot::class,
        Template::class,
        UnorderedList::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Abbreviation::class,
        Citation::class,
        Code::class,
        Data::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
        Emphasis::class,
        Figure::class,
        Italic::class,
        KeyboardInput::class,
        OrderedList::class,
        Paragraph::class,
        PreformattedText::class,
        Quotation::class,
        Strikethrough::class,
        SampleOutput::class,
        Small::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Time::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
    ];

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

    public function setValue(string $value): static
    {
        $this->value = $value;
        $this->delegated->setAttribute('value', (string) $value);
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}

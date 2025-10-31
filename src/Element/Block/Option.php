<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Option - The option element represents an item in a select dropdown list.
 * 
 * @generated 2025-10-31 21:58:00
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\DataList;
use Html\Element\Block\OptionGroup;
use Html\Element\Inline\Select;
use Html\Trait\GlobalAttribute\AccesskeyTrait;
use Html\Trait\GlobalAttribute\AutocapitalizeTrait;
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
use Html\Mapping\Element;

#[Element('option')]
class Option extends BlockElement
{
        use IdTrait;

    use ClassTrait;

    use TitleTrait;

    use LangTrait;

    use StyleTrait;

    use HiddenTrait;

    use TabindexTrait;

    use AccesskeyTrait;

    use AutocapitalizeTrait;

    use ContenteditableTrait;

    use InputmodeTrait;

    use DirTrait;

    use DraggableTrait;

    use SpellcheckTrait;

    use TranslateTrait;

    use DataTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'option';

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
        Select::class,
        OptionGroup::class,
        DataList::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies a label for the associated form control, option group, or option. */
    public ?string $label = null;

    /** When present, it specifies that an option should be pre-selected when the page loads. */
    public ?bool $selected = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;


    public function setDisabled(bool $disabled): static
    {
        $this->disabled = $disabled;
        $this->delegated->setAttribute('disabled', (string) $disabled);
        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
        $this->delegated->setAttribute('label', (string) $label);
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setSelected(bool $selected): static
    {
        $this->selected = $selected;
        $this->delegated->setAttribute('selected', (string) $selected);
        return $this;
    }

    public function getSelected(): ?bool
    {
        return $this->selected;
    }

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

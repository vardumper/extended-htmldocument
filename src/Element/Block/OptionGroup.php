<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * OptionGroup - The optgroup element represents a group of option elements with a common label.
 * 
 * @generated 2025-10-31 22:22:33
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Option;
use Html\Element\Inline\Select;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('optgroup')]
class OptionGroup extends BlockElement
{
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\TranslateTrait;
    use GlobalAttribute\DataTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'optgroup';

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
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Option::class,
    ];


    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies a label for the associated form control, option group, or option. */
    public ?string $label = null;


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


}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 * 
 * @generated 2025-10-31 21:58:00
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
 */
namespace Html\Element\Inline;

use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\TypeInputEnum;
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
use Html\Mapping\Element;

#[Element('input')]
class Input extends InlineElement
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
    public const string QUALIFIED_NAME = 'input';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

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
        Fieldset::class,
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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies a comma-separated list of file types that the server accepts. */
    public ?string $accept = null;

    /** 
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @category HTML attribute
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /** Specifies alternative text to be displayed when the image cannot be rendered. */
    public ?string $alt = null;

    /** 
     * 
     * @category HTML attribute
     * @example on
     */
    public ?AutocompleteEnum $autocomplete = null;

    /** When present, it indicates that an input element should be pre-selected (checked) when the page loads. */
    public ?bool $checked = null;

    /** Specifies the direction of the text. */
    public ?string $dirname = null;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** Refers to a <datalist> element that contains pre-defined options for an input element. */
    public ?string $list = null;

    /** Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max = null;

    /** Specifies the maximum number of characters allowed in an input field. */
    public ?int $maxlength = null;

    /** Specifies the minimum value for an input element or a meter element. */
    public ?string $min = null;

    /** Specifies the minimum number of characters required in an input field. */
    public ?int $minlength = null;

    /** When present, it specifies that the user is allowed to enter more than one value in an input element. */
    public ?bool $multiple = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies a regular expression that the <input> element's value is checked against. */
    public ?string $pattern = null;

    /** Specifies a short hint that describes the expected value of an input field. */
    public ?string $placeholder = null;

    /** When present, it specifies that an input element is read-only. */
    public ?bool $readonly = null;

    /** When present, it specifies that an input field must be filled out before submitting the form. */
    public ?bool $required = null;

    /** Specifies the height of a hr element in pixels. */
    public ?int $size = null;

    /** Specifies the URL of the external resource to be embedded or referenced. Required if input type is image */
    public ?string $src = null;

    /** Specifies the legal number intervals for an input element. */
    public ?string $step = null;

    /** 
     * Specifies the type of the input. Defaults to text if the attribute is omitted
     * @category HTML attribute
     * @example text
     */
    public ?TypeInputEnum $type = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setAccept(string $accept): static
    {
        $this->accept = $accept;
        $this->delegated->setAttribute('accept', (string) $accept);
        return $this;
    }

    public function getAccept(): ?string
    {
        return $this->accept;
    }

    public function setAutocorrect(string|AutocorrectEnum $autocorrect): static
    {
        if (is_string($autocorrect)) {
            $autocorrect = AutocorrectEnum::tryFrom($autocorrect) ?? throw new \InvalidArgumentException("Invalid value for \$autocorrect.");
        }
        $this->autocorrect = $autocorrect;
        $this->delegated->setAttribute('autocorrect', (string) $autocorrect->value);

        return $this;
    }

    public function getAutocorrect(): ?AutocorrectEnum
    {
        return $this->autocorrect;
    }

    public function setAlt(string $alt): static
    {
        $this->alt = $alt;
        $this->delegated->setAttribute('alt', (string) $alt);
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAutocomplete(string|AutocompleteEnum $autocomplete): static
    {
        if (is_string($autocomplete)) {
            $autocomplete = AutocompleteEnum::tryFrom($autocomplete) ?? throw new \InvalidArgumentException("Invalid value for \$autocomplete.");
        }
        $this->autocomplete = $autocomplete;
        $this->delegated->setAttribute('autocomplete', (string) $autocomplete->value);

        return $this;
    }

    public function getAutocomplete(): ?AutocompleteEnum
    {
        return $this->autocomplete;
    }

    public function setChecked(bool $checked): static
    {
        $this->checked = $checked;
        $this->delegated->setAttribute('checked', (string) $checked);
        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setDirname(string $dirname): static
    {
        $this->dirname = $dirname;
        $this->delegated->setAttribute('dirname', (string) $dirname);
        return $this;
    }

    public function getDirname(): ?string
    {
        return $this->dirname;
    }

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

    public function setHeight(string $height): static
    {
        $this->height = $height;
        $this->delegated->setAttribute('height', (string) $height);
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setList(string $list): static
    {
        $this->list = $list;
        $this->delegated->setAttribute('list', (string) $list);
        return $this;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setMax(int $max): static
    {
        $this->max = $max;
        $this->delegated->setAttribute('max', (string) $max);
        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMaxlength(int $maxlength): static
    {
        $this->maxlength = $maxlength;
        $this->delegated->setAttribute('maxlength', (string) $maxlength);
        return $this;
    }

    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }

    public function setMin(string $min): static
    {
        $this->min = $min;
        $this->delegated->setAttribute('min', (string) $min);
        return $this;
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setMinlength(int $minlength): static
    {
        $this->minlength = $minlength;
        $this->delegated->setAttribute('minlength', (string) $minlength);
        return $this;
    }

    public function getMinlength(): ?int
    {
        return $this->minlength;
    }

    public function setMultiple(bool $multiple): static
    {
        $this->multiple = $multiple;
        $this->delegated->setAttribute('multiple', (string) $multiple);
        return $this;
    }

    public function getMultiple(): ?bool
    {
        return $this->multiple;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->delegated->setAttribute('name', (string) $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setPattern(string $pattern): static
    {
        $this->pattern = $pattern;
        $this->delegated->setAttribute('pattern', (string) $pattern);
        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPlaceholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;
        $this->delegated->setAttribute('placeholder', (string) $placeholder);
        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    public function setReadonly(bool $readonly): static
    {
        $this->readonly = $readonly;
        $this->delegated->setAttribute('readonly', (string) $readonly);
        return $this;
    }

    public function getReadonly(): ?bool
    {
        return $this->readonly;
    }

    public function setRequired(bool $required): static
    {
        $this->required = $required;
        $this->delegated->setAttribute('required', (string) $required);
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setSize(int $size): static
    {
        $this->size = $size;
        $this->delegated->setAttribute('size', (string) $size);
        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', (string) $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setStep(string $step): static
    {
        $this->step = $step;
        $this->delegated->setAttribute('step', (string) $step);
        return $this;
    }

    public function getStep(): ?string
    {
        return $this->step;
    }

    public function setType(string|TypeInputEnum $type): static
    {
        if (is_string($type)) {
            $type = TypeInputEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?TypeInputEnum
    {
        return $this->type;
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

    public function setWidth(string $width): static
    {
        $this->width = $width;
        $this->delegated->setAttribute('width', (string) $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

}

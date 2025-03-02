<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
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
use Html\Element\Block\Menu;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\TypeEnum;

class Button extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'button';

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
        Menu::class,
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


    /** When present, it specifies that an element should automatically get focus when the page loads. */
    public ?bool $autofocus = null;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies the media type of the linked resource. */
    protected ?TypeEnum $type = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;


    public function setAutofocus(bool $autofocus): self
    {
        $this->autofocus = $autofocus;
        return $this;
    }

    public function getAutofocus(): ?bool
    {
        return $this->autofocus;
    }

    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
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

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 *
 * @generated 2025-03-08 18:09:25
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 */

namespace Html\Element\Block;

use BackedEnum;
use Html\Element\BlockElement;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Label;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Meter;
use Html\Element\Inline\Output;
use Html\Element\Inline\Progress;
use Html\Element\Inline\Select;
use Html\Element\Inline\Slot;
use Html\Element\Inline\Textarea;
use Html\Element\Void\Script;
use Html\Enum\AutocompleteEnum;
use Html\Enum\EnctypeEnum;
use Html\Enum\MethodEnum;
use Html\Enum\TargetEnum;

class Form extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'form';

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
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
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
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Button::class,
        Canvas::class,
        DataList::class,
        Details::class,
        Dialog::class,
        Fieldset::class,
        Input::class,
        Label::class,
        Legend::class,
        Meter::class,
        NoScript::class,
        Output::class,
        Progress::class,
        Script::class,
        Select::class,
        Slot::class,
        Summary::class,
        Template::class,
        Textarea::class,
    ];

    /**
     * Specifies the character encodings that are to be used for form submission.
     */
    public ?string $acceptCharset = null;

    /**
     * Specifies the URL where the form data should be submitted when the form is submitted.
     */
    public ?string $action = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * When present, it specifies that a form should not be validated when submitted.
     */
    public ?bool $novalidate = null;

    /**
     * Specifies whether a form or input field should have autocomplete enabled. Default is on.
     * @example on
     */
    protected ?AutocompleteEnum $autocomplete = null;

    /**
     * Specifies how form data should be encoded before sending it to a server. Only used if the method attribute is set to post. Default is application/x-www-form-urlencoded.
     */
    protected ?EnctypeEnum $enctype = null;

    /**
     * @example get
     */
    protected ?MethodEnum $method = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    protected ?TargetEnum $target = null;

    public function setAcceptCharset(string $acceptCharset): self
    {
        $this->acceptCharset = $acceptCharset;
        return $this;
    }

    public function getAcceptCharset(): ?string
    {
        return $this->acceptCharset;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAutocomplete(AutocompleteEnum $autocomplete): self
    {
        $this->autocomplete = $autocomplete;
        $this->htmlElement->setAttribute(
            'autocomplete',
            \is_subclass_of($autocomplete, BackedEnum::class) ? (string) $autocomplete->value : $autocomplete
        );

        return $this;
    }

    public function getAutocomplete(): ?AutocompleteEnum
    {
        return $this->autocomplete;
    }

    public function setEnctype(EnctypeEnum $enctype): self
    {
        $this->enctype = $enctype;
        $this->htmlElement->setAttribute(
            'enctype',
            \is_subclass_of($enctype, BackedEnum::class) ? (string) $enctype->value : $enctype
        );

        return $this;
    }

    public function getEnctype(): ?EnctypeEnum
    {
        return $this->enctype;
    }

    public function setMethod(MethodEnum $method): self
    {
        $this->method = $method;
        $this->htmlElement->setAttribute(
            'method',
            \is_subclass_of($method, BackedEnum::class) ? (string) $method->value : $method
        );

        return $this;
    }

    public function getMethod(): ?MethodEnum
    {
        return $this->method;
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

    public function setNovalidate(bool $novalidate): self
    {
        $this->novalidate = $novalidate;
        return $this;
    }

    public function getNovalidate(): ?bool
    {
        return $this->novalidate;
    }

    public function setTarget(TargetEnum $target): self
    {
        $this->target = $target;
        $this->htmlElement->setAttribute(
            'target',
            \is_subclass_of($target, BackedEnum::class) ? (string) $target->value : $target
        );

        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
    }
}

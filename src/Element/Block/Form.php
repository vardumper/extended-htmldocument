<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 *
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Label;
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
    public static array $childOf = [];

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

    public ?AutocompleteEnum $autocomplete = null;

    public ?EnctypeEnum $enctype = null;

    public ?MethodEnum $method = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * When present, it specifies that a form should not be validated when submitted.
     */
    public ?bool $novalidate = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target = null;
}

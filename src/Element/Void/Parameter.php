<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Parameter - The param element defines parameters for an object element.
 *
 * @generated 2025-11-01 15:04:49
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
 */

namespace Html\Element\Void;

use Html\Element\Block\Aside;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Section;
use Html\Element\Inline\MarkedText;
use Html\Element\VoidElement;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;

#[Element('param')]
class Parameter extends VoidElement
{
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\DataTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'param';

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
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

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

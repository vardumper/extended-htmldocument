<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Embed - The embed element provides an integration point for an external (typically non-HTML) application or interactive content.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Mapping\Element;

#[Element('embed')]
class Embed extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'embed';

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
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?string $type = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width = null;

    public function setHeight(string $height): static
    {
        $this->height = $height;
        $this->delegated->setAttribute('height', $height);
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        $this->delegated->setAttribute('type', $type);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setWidth(string $width): static
    {
        $this->width = $width;
        $this->delegated->setAttribute('width', $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }
}

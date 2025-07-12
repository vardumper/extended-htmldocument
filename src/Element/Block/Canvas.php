<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Canvas - The canvas element is used to draw graphics, on the fly, via scripting (usually JavaScript).
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Mapping\Element;

#[Element('canvas')]
class Canvas extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'canvas';

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
    public static array $childOf = [Body::class, Form::class, Paragraph::class];

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

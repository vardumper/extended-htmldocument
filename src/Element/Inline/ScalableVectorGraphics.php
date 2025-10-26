<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ScalableVectorGraphics - The svg element is a container for embedded SVG graphics.
 *
 * @generated 2025-10-26 20:40:54
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/svg
 */

namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Element\Void\Script;
use Html\Element\Void\Style;
use Html\Element\Void\Title;
use Html\Mapping\Element;

#[Element('svg')]
class ScalableVectorGraphics extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'svg';

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
    public static array $childOf = [self::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Script::class,
        Style::class,
        self::class,
        Title::class,
    ];

    /**
     * Specifies the XML namespace for the SVG element.
     * @example http://www.w3.org/2000/svg
     */
    public ?string $xmlns = null;

    /**
     * Defines the position and dimension, in user space, of an SVG viewport.
     */
    public ?string $viewBox = null;

    /**
     * Specifies the color of the stroke (outline) of shapes.
     */
    public ?string $stroke = null;

    /**
     * Specifies the color of the interior of shapes.
     */
    public ?string $fill = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width = null;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height = null;

    public function setXmlns(string $xmlns): static
    {
        $this->xmlns = $xmlns;
        $this->delegated->setAttribute('xmlns', (string) $xmlns);
        return $this;
    }

    public function getXmlns(): ?string
    {
        return $this->xmlns;
    }

    public function setViewBox(string $viewBox): static
    {
        $this->viewBox = $viewBox;
        $this->delegated->setAttribute('viewBox', (string) $viewBox);
        return $this;
    }

    public function getViewBox(): ?string
    {
        return $this->viewBox;
    }

    public function setStroke(string $stroke): static
    {
        $this->stroke = $stroke;
        $this->delegated->setAttribute('stroke', (string) $stroke);
        return $this;
    }

    public function getStroke(): ?string
    {
        return $this->stroke;
    }

    public function setFill(string $fill): static
    {
        $this->fill = $fill;
        $this->delegated->setAttribute('fill', (string) $fill);
        return $this;
    }

    public function getFill(): ?string
    {
        return $this->fill;
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
}

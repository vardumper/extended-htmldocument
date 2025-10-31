<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ScalableVectorGraphics - The svg element is a container for embedded SVG graphics.
 *
 * @generated 2025-10-31 21:58:00
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

#[Element('svg')]
class ScalableVectorGraphics extends InlineElement
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
    public const string QUALIFIED_NAME = 'svg';

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
    public static array $childOf = [self::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [Anchor::class, Script::class, Style::class, self::class, Title::class];

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

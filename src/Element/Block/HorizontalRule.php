<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-01-21 21:02:35
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\HrAlignEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

/**
 * The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 */
#[Element('hr')]
class HorizontalRule extends BlockElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TitleTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'hr';

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
    public static array $childOf = [Body::class, Paragraph::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the horizontal alignment of the element.
     * @deprecated
     */
    protected ?HrAlignEnum $align = null;

    /**
     * @deprecated
     */
    protected ?string $color = null;

    /**
     * @deprecated
     */
    protected ?bool $noshade = null;

    /**
     * Specifies the height of a hr element in pixels.
     * @deprecated
     */
    protected ?int $size = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    protected ?string $width = null;

    public function setAlign(string|HrAlignEnum $align): static
    {
        if (\is_string($align)) {
            $align = HrAlignEnum::tryFrom($align) ?? throw new InvalidArgumentException('Invalid value for $align.');
        }
        $this->align = $align;
        $this->delegated->setAttribute('align', (string) $align->value);

        return $this;
    }

    public function getAlign(): ?HrAlignEnum
    {
        return $this->align;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;
        $this->delegated->setAttribute('color', (string) $color);
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setNoshade(bool $noshade): static
    {
        $this->noshade = $noshade;
        $this->delegated->setAttribute('noshade', (string) $noshade);
        return $this;
    }

    public function getNoshade(): ?bool
    {
        return $this->noshade;
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

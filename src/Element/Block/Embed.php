<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Embed - The embed element provides an integration point for an external (typically non-HTML) application or interactive content.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\TypeEnum;

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
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public ?string $src = null;

    /** Specifies the media type of the linked resource. */
    protected ?TypeEnum $type = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setSrc(string $src): void
    {
        $this->src = $src;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setType(TypeEnum $type): void
    {
        $this->type = $type;
        $this->htmlElement->setAttribute('type', $type->value);
    }

    public function getType(): ?TypeEnum
    {
        return $this->type;
    }

    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }


}

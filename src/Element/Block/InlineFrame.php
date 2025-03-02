<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * InlineFrame - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\ReferrerpolicyEnum;

class InlineFrame extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'iframe';

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


    /** Enables the iframe to be displayed in fullscreen mode. */
    public ?bool $allowfullscreen = null;

    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies the referrer policy for fetches initiated by the element. */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /**  */
    public ?string $sandbox = null;

    /** When present, it specifies that the iframe should look like it is a part of the containing document (no borders or scrollbars). */
    public ?bool $seamless = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public ?string $src = null;

    /**  */
    public ?string $srcdoc = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setAllowfullscreen(bool $allowfullscreen): void
    {
        $this->allowfullscreen = $allowfullscreen;
    }

    public function getAllowfullscreen(): ?bool
    {
        return $this->allowfullscreen;
    }

    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setReferrerpolicy(ReferrerpolicyEnum $referrerpolicy): void
    {
        $this->referrerpolicy = $referrerpolicy;
        $this->htmlElement->setAttribute('referrerpolicy', $referrerpolicy->value);
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setSandbox(string $sandbox): void
    {
        $this->sandbox = $sandbox;
    }

    public function getSandbox(): ?string
    {
        return $this->sandbox;
    }

    public function setSeamless(bool $seamless): void
    {
        $this->seamless = $seamless;
    }

    public function getSeamless(): ?bool
    {
        return $this->seamless;
    }

    public function setSrc(string $src): void
    {
        $this->src = $src;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcdoc(string $srcdoc): void
    {
        $this->srcdoc = $srcdoc;
    }

    public function getSrcdoc(): ?string
    {
        return $this->srcdoc;
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

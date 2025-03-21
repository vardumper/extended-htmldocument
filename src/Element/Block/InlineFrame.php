<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * InlineFrame - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.
 *
 * @generated 2025-03-21 21:04:01
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\ReferrerpolicyEnum;
use InvalidArgumentException;

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
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Enables the iframe to be displayed in fullscreen mode.
     */
    public ?bool $allowfullscreen = null;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    public ?string $sandbox = null;

    /**
     * When present, it specifies that the iframe should look like it is a part of the containing document (no borders or scrollbars).
     */
    public ?bool $seamless = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    public ?string $srcdoc = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width = null;

    /**
     * Specifies the referrer policy for fetches initiated by the element.
     */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    public function setAllowfullscreen(bool $allowfullscreen): self
    {
        $this->allowfullscreen = $allowfullscreen;
        $this->htmlElement->setAttribute('allowfullscreen', $allowfullscreen);
        return $this;
    }

    public function getAllowfullscreen(): ?bool
    {
        return $this->allowfullscreen;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;
        $this->htmlElement->setAttribute('height', $height);
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        $this->htmlElement->setAttribute('name', $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setReferrerpolicy(string|ReferrerpolicyEnum $referrerpolicy): self
    {
        if (is_string($referrerpolicy)) {
            $referrerpolicy = ReferrerpolicyEnum::tryFrom($referrerpolicy) ?? throw new InvalidArgumentException(
                'Invalid value for $referrerpolicy.'
            );
        }
        $this->referrerpolicy = $referrerpolicy;
        $this->htmlElement->setAttribute('referrerpolicy', (string) $referrerpolicy->value);

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setSandbox(string $sandbox): self
    {
        $this->sandbox = $sandbox;
        $this->htmlElement->setAttribute('sandbox', $sandbox);
        return $this;
    }

    public function getSandbox(): ?string
    {
        return $this->sandbox;
    }

    public function setSeamless(bool $seamless): self
    {
        $this->seamless = $seamless;
        $this->htmlElement->setAttribute('seamless', $seamless);
        return $this;
    }

    public function getSeamless(): ?bool
    {
        return $this->seamless;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;
        $this->htmlElement->setAttribute('src', $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcdoc(string $srcdoc): self
    {
        $this->srcdoc = $srcdoc;
        $this->htmlElement->setAttribute('srcdoc', $srcdoc);
        return $this;
    }

    public function getSrcdoc(): ?string
    {
        return $this->srcdoc;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;
        $this->htmlElement->setAttribute('width', $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }
}

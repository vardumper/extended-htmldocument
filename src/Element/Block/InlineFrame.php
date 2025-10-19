<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * InlineFrame - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.
 *
 * @generated 2025-10-19 21:49:08
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\ReferrerpolicyEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('iframe')]
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

    /**
     * Specifies the referrer policy for fetches initiated by the element.
     */
    public ?ReferrerpolicyEnum $referrerpolicy = null;

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

    public function setAllowfullscreen(bool $allowfullscreen): static
    {
        $this->allowfullscreen = $allowfullscreen;
        $this->delegated->setAttribute('allowfullscreen', (string) $allowfullscreen);
        return $this;
    }

    public function getAllowfullscreen(): ?bool
    {
        return $this->allowfullscreen;
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

    public function setReferrerpolicy(string|ReferrerpolicyEnum $referrerpolicy): static
    {
        if (is_string($referrerpolicy)) {
            $referrerpolicy = ReferrerpolicyEnum::tryFrom($referrerpolicy) ?? throw new InvalidArgumentException(
                'Invalid value for $referrerpolicy.'
            );
        }
        $this->referrerpolicy = $referrerpolicy;
        $this->delegated->setAttribute('referrerpolicy', (string) $referrerpolicy->value);

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setSandbox(string $sandbox): static
    {
        $this->sandbox = $sandbox;
        $this->delegated->setAttribute('sandbox', (string) $sandbox);
        return $this;
    }

    public function getSandbox(): ?string
    {
        return $this->sandbox;
    }

    public function setSeamless(bool $seamless): static
    {
        $this->seamless = $seamless;
        $this->delegated->setAttribute('seamless', (string) $seamless);
        return $this;
    }

    public function getSeamless(): ?bool
    {
        return $this->seamless;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', (string) $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcdoc(string $srcdoc): static
    {
        $this->srcdoc = $srcdoc;
        $this->delegated->setAttribute('srcdoc', (string) $srcdoc);
        return $this;
    }

    public function getSrcdoc(): ?string
    {
        return $this->srcdoc;
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

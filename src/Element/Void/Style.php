<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\TypeStyleEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('style')]
class Style extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'style';

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
    public static array $childOf = [Head::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies the media type for which the linked resource or style sheet is intended.
     */
    public ?string $media = null;

    /**
     * Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks.
     */
    public ?string $nonce = null;

    /**
     * Specifies additional information about the element, typically displayed as a tooltip.
     */
    public ?string $title = null;

    /**
     * Specifies the media type of the inline styles.
     * @example text/css
     */
    protected ?TypeStyleEnum $type = null;

    public function setDisabled(bool $disabled): static
    {
        $this->disabled = $disabled;
        $this->delegated->setAttribute('disabled', $disabled);
        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setMedia(string $media): static
    {
        $this->media = $media;
        $this->delegated->setAttribute('media', $media);
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setNonce(string $nonce): static
    {
        $this->nonce = $nonce;
        $this->delegated->setAttribute('nonce', $nonce);
        return $this;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        $this->delegated->setAttribute('title', $title);
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setType(string|TypeStyleEnum $type): static
    {
        if (is_string($type)) {
            $type = TypeStyleEnum::tryFrom($type) ?? throw new InvalidArgumentException('Invalid value for $type.');
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?TypeStyleEnum
    {
        return $this->type;
    }
}

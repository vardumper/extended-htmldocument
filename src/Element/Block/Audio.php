<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Audio - The audio element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the source element.
 *
 * @generated 2025-03-21 21:04:01
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Enum\CrossoriginEnum;
use Html\Enum\PreloadEnum;
use InvalidArgumentException;

class Audio extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'audio';

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
     * When present, it specifies that the audio or video will automatically start playing as soon as it can do so without stopping.
     */
    public ?bool $autoplay = null;

    /**
     * When present, it specifies that audio or video controls should be displayed (such as play, pause, and volume).
     */
    public ?bool $controls = null;

    /**
     * When present, it specifies that the audio or video will start over again every time it is finished.
     */
    public ?bool $loop = null;

    /**
     * When present, it specifies that the audio output of the video should be muted.
     */
    public ?bool $muted = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    /**
     * Specifies how the element handles cross-origin requests.
     */
    protected ?CrossoriginEnum $crossorigin = null;

    protected ?PreloadEnum $preload = null;

    public function setAutoplay(bool $autoplay): self
    {
        $this->autoplay = $autoplay;
        $this->htmlElement->setAttribute('autoplay', $autoplay);
        return $this;
    }

    public function getAutoplay(): ?bool
    {
        return $this->autoplay;
    }

    public function setControls(bool $controls): self
    {
        $this->controls = $controls;
        $this->htmlElement->setAttribute('controls', $controls);
        return $this;
    }

    public function getControls(): ?bool
    {
        return $this->controls;
    }

    public function setCrossorigin(string|CrossoriginEnum $crossorigin): self
    {
        if (is_string($crossorigin)) {
            $crossorigin = CrossoriginEnum::tryFrom($crossorigin) ?? throw new InvalidArgumentException(
                'Invalid value for $crossorigin.'
            );
        }
        $this->crossorigin = $crossorigin;
        $this->htmlElement->setAttribute('crossorigin', (string) $crossorigin->value);

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setLoop(bool $loop): self
    {
        $this->loop = $loop;
        $this->htmlElement->setAttribute('loop', $loop);
        return $this;
    }

    public function getLoop(): ?bool
    {
        return $this->loop;
    }

    public function setMuted(bool $muted): self
    {
        $this->muted = $muted;
        $this->htmlElement->setAttribute('muted', $muted);
        return $this;
    }

    public function getMuted(): ?bool
    {
        return $this->muted;
    }

    public function setPreload(string|PreloadEnum $preload): self
    {
        if (is_string($preload)) {
            $preload = PreloadEnum::tryFrom($preload) ?? throw new InvalidArgumentException(
                'Invalid value for $preload.'
            );
        }
        $this->preload = $preload;
        $this->htmlElement->setAttribute('preload', (string) $preload->value);

        return $this;
    }

    public function getPreload(): ?PreloadEnum
    {
        return $this->preload;
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
}

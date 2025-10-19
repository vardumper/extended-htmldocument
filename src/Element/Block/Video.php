<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Video - The video element is used to embed video content in a document, such as a movie clip or other video streams.
 *
 * @generated 2025-10-19 21:49:08
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Enum\CrossoriginEnum;
use Html\Enum\PreloadEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('video')]
class Video extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'video';

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

    public ?CrossoriginEnum $crossorigin = null;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height = null;

    /**
     * When present, it specifies that the audio or video will start over again every time it is finished.
     */
    public ?bool $loop = null;

    /**
     * When present, it specifies that the audio output of the video should be muted.
     */
    public ?bool $muted = null;

    /**
     * Specifies the URL of an image to be displayed as the video's poster (thumbnail) image.
     */
    public ?string $poster = null;

    public ?PreloadEnum $preload = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width = null;

    public function setAutoplay(bool $autoplay): static
    {
        $this->autoplay = $autoplay;
        $this->delegated->setAttribute('autoplay', (string) $autoplay);
        return $this;
    }

    public function getAutoplay(): ?bool
    {
        return $this->autoplay;
    }

    public function setControls(bool $controls): static
    {
        $this->controls = $controls;
        $this->delegated->setAttribute('controls', (string) $controls);
        return $this;
    }

    public function getControls(): ?bool
    {
        return $this->controls;
    }

    public function setCrossorigin(string|CrossoriginEnum $crossorigin): static
    {
        if (is_string($crossorigin)) {
            $crossorigin = CrossoriginEnum::tryFrom($crossorigin) ?? throw new InvalidArgumentException(
                'Invalid value for $crossorigin.'
            );
        }
        $this->crossorigin = $crossorigin;
        $this->delegated->setAttribute('crossorigin', (string) $crossorigin->value);

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
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

    public function setLoop(bool $loop): static
    {
        $this->loop = $loop;
        $this->delegated->setAttribute('loop', (string) $loop);
        return $this;
    }

    public function getLoop(): ?bool
    {
        return $this->loop;
    }

    public function setMuted(bool $muted): static
    {
        $this->muted = $muted;
        $this->delegated->setAttribute('muted', (string) $muted);
        return $this;
    }

    public function getMuted(): ?bool
    {
        return $this->muted;
    }

    public function setPoster(string $poster): static
    {
        $this->poster = $poster;
        $this->delegated->setAttribute('poster', (string) $poster);
        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPreload(string|PreloadEnum $preload): static
    {
        if (is_string($preload)) {
            $preload = PreloadEnum::tryFrom($preload) ?? throw new InvalidArgumentException(
                'Invalid value for $preload.'
            );
        }
        $this->preload = $preload;
        $this->delegated->setAttribute('preload', (string) $preload->value);

        return $this;
    }

    public function getPreload(): ?PreloadEnum
    {
        return $this->preload;
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

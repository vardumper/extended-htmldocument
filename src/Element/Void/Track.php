<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Track - The track element is used as a child of the media elements—audio and video. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks.
 *
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\KindEnum;

class Track extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'track';

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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies that the track should be enabled by default when the page loads.
     */
    public ?bool $default = null;

    /**
     * Specifies a label for the associated form control, option group, or option.
     */
    public ?string $label = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    /**
     * Specifies the language of the track text data.
     */
    public ?string $srclang = null;

    protected ?KindEnum $kind = null;

    public function setDefault(bool $default): self
    {
        $this->default = $default;
        return $this;
    }

    public function getDefault(): ?bool
    {
        return $this->default;
    }

    public function setKind(KindEnum $kind): self
    {
        $this->kind = $kind;
        $this->htmlElement->setAttribute('kind', $kind->value);
        return $this;
    }

    public function getKind(): ?KindEnum
    {
        return $this->kind;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrclang(string $srclang): self
    {
        $this->srclang = $srclang;
        return $this;
    }

    public function getSrclang(): ?string
    {
        return $this->srclang;
    }
}

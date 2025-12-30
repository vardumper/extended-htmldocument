<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-30 13:44:50
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Element\Block\{
    Aside,
    DefinitionDescription,
    Division,
    Footer,
    Header,
    Main,
    Section,
};
use Html\Element\Inline\MarkedText;
use Html\Enum\KindEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The track element is used as a child of the media elements—audio and video. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks.
 */
#[Element('track')]
class Track extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\AlpineJsTrait;
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
    public static array $childOf = [
        Aside::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** Specifies that the track should be enabled by default when the page loads. */
    protected ?bool $default = null;

    /** 
     * 
     * @category HTML attribute
     * @example subtitles
     */
    protected ?KindEnum $kind = null;

    /** Specifies a label for the associated form control, option group, or option. */
    protected ?string $label = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    protected ?string $src = null;

    /** Specifies the language of the track text data. */
    protected ?string $srclang = null;


    public function setDefault(bool $default): static
    {
        $this->default = $default;
        $this->delegated->setAttribute('default', (string) $default);
        return $this;
    }

    public function getDefault(): ?bool
    {
        return $this->default;
    }

    public function setKind(string|KindEnum $kind): static
    {
        if (\is_string($kind)) {
            $kind = KindEnum::tryFrom($kind) ?? throw new \InvalidArgumentException("Invalid value for \$kind.");
        }
        $this->kind = $kind;
        $this->delegated->setAttribute('kind', (string) $kind->value);

        return $this;
    }

    public function getKind(): ?KindEnum
    {
        return $this->kind;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
        $this->delegated->setAttribute('label', (string) $label);
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
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

    public function setSrclang(string $srclang): static
    {
        $this->srclang = $srclang;
        $this->delegated->setAttribute('srclang', (string) $srclang);
        return $this;
    }

    public function getSrclang(): ?string
    {
        return $this->srclang;
    }

}

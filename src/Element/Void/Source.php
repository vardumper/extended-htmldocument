<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.
 * 
 * @generated 2025-12-01 08:37:28
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
 */
namespace Html\Element\Void;

use Html\Element\Block\Aside;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Picture;
use Html\Element\Block\Section;
use Html\Element\Inline\MarkedText;
use Html\Element\VoidElement;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('source')]
class Source extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'source';

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
        Picture::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** Specifies the media type for which the linked resource or style sheet is intended. */
    protected ?string $media = null;

    /** Specifies the sizes of the images or icons for different display/window sizes. */
    protected ?string $sizes = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    protected ?string $src = null;

    /** Specifies a list of possible image sources for the browser to use. */
    protected ?string $srcset = null;

    /** Specifies the media type of the linked resource. */
    protected ?string $type = null;


    public function setMedia(string $media): static
    {
        $this->media = $media;
        $this->delegated->setAttribute('media', (string) $media);
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setSizes(string $sizes): static
    {
        $this->sizes = $sizes;
        $this->delegated->setAttribute('sizes', (string) $sizes);
        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
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

    public function setSrcset(string $srcset): static
    {
        $this->srcset = $srcset;
        $this->delegated->setAttribute('srcset', (string) $srcset);
        return $this;
    }

    public function getSrcset(): ?string
    {
        return $this->srcset;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

}

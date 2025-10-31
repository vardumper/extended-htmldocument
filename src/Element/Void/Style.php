<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 * 
 * @generated 2025-10-31 21:58:00
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 */
namespace Html\Element\Void;

use Html\Element\Inline\ScalableVectorGraphics;
use Html\Element\VoidElement;
use Html\Element\Void\Head;
use Html\Enum\TypeStyleEnum;
use Html\Trait\GlobalAttribute\ClassTrait;
use Html\Trait\GlobalAttribute\DataTrait;
use Html\Trait\GlobalAttribute\DirTrait;
use Html\Trait\GlobalAttribute\IdTrait;
use Html\Trait\GlobalAttribute\LangTrait;
use Html\Trait\GlobalAttribute\TitleTrait;
use Html\Mapping\Element;

#[Element('style')]
class Style extends VoidElement
{
        use IdTrait;

    use ClassTrait;

    use TitleTrait;

    use DataTrait;

    use LangTrait;

    use DirTrait;
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
    public static array $childOf = [
        Head::class,
        ScalableVectorGraphics::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** Specifies the media type for which the linked resource or style sheet is intended. */
    public ?string $media = null;

    /** Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks. */
    public ?string $nonce = null;

    /** Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title = null;

    /** 
     * Specifies the media type of the inline styles.
     * @category HTML attribute
     * @deprecated
    
     * @example text/css
     */
    public ?TypeStyleEnum $type = null;


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

    public function setNonce(string $nonce): static
    {
        $this->nonce = $nonce;
        $this->delegated->setAttribute('nonce', (string) $nonce);
        return $this;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        $this->delegated->setAttribute('title', (string) $title);
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setType(string|TypeStyleEnum $type): static
    {
        if (is_string($type)) {
            $type = TypeStyleEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
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

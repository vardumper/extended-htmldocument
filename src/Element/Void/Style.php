<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:30:17
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Element\Inline\ScalableVectorGraphics;
use Html\Element\Void\Head;
use Html\Enum\StyleTypeEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The style element is used to embed CSS styles directly into an HTML document.
 */
#[Element('style')]
class Style extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\TitleTrait;
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

    /** 
     * Specifies the media type for which the linked resource or style sheet is intended.
     * @category HTML attribute */
    protected ?string $media = null;

    /** 
     * Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks.
     * @category HTML attribute */
    protected ?string $nonce = null;

    /** 
     * Specifies the media type of the inline styles.
     * @category HTML attribute
     * @deprecated
    
     * @example text/css
     */
    protected ?StyleTypeEnum $type = null;


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

    public function setType(string|StyleTypeEnum $type): static
    {
        if (\is_string($type)) {
            $type = StyleTypeEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?StyleTypeEnum
    {
        return $this->type;
    }

}

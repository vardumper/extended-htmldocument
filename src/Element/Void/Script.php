<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Script - The script element is used to embed or reference an executable script within an HTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 * 
 * @generated 2025-12-01 08:37:28
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 */
namespace Html\Element\Void;

use Html\Element\Block\Body;
use Html\Element\Block\Form;
use Html\Element\Block\Menu;
use Html\Element\Inline\ScalableVectorGraphics;
use Html\Element\VoidElement;
use Html\Element\Void\Head;
use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\ScriptTypeEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('script')]
class Script extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\LangTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'script';

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
        Body::class,
        Form::class,
        Head::class,
        Menu::class,
        ScalableVectorGraphics::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** When present, it specifies that the script will be executed asynchronously as soon as it is available. */
    protected ?bool $async = null;

    /** Specifies the character encoding for the resource. */
    protected ?string $charset = null;

    /**  */
    protected ?CrossoriginEnum $crossorigin = null;

    /** When present, it specifies that the script should be executed after the page has been parsed. */
    protected ?bool $defer = null;

    /** Specifies the integrity value of a resource. */
    protected ?string $integrity = null;

    /** Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks. */
    protected ?string $nonce = null;

    /** Specifies the referrer policy for fetches initiated by the element. */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /** Specifies the URL of the external resource to be embedded or referenced. */
    protected ?string $src = null;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute
     * @example text/javascript
     */
    protected ?ScriptTypeEnum $type = null;


    public function setAsync(bool $async): static
    {
        $this->async = $async;
        $this->delegated->setAttribute('async', (string) $async);
        return $this;
    }

    public function getAsync(): ?bool
    {
        return $this->async;
    }

    public function setCharset(string $charset): static
    {
        $this->charset = $charset;
        $this->delegated->setAttribute('charset', (string) $charset);
        return $this;
    }

    public function getCharset(): ?string
    {
        return $this->charset;
    }

    public function setCrossorigin(string|CrossoriginEnum $crossorigin): static
    {
        if (\is_string($crossorigin)) {
            $crossorigin = CrossoriginEnum::tryFrom($crossorigin) ?? throw new \InvalidArgumentException("Invalid value for \$crossorigin.");
        }
        $this->crossorigin = $crossorigin;
        $this->delegated->setAttribute('crossorigin', (string) $crossorigin->value);

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setDefer(bool $defer): static
    {
        $this->defer = $defer;
        $this->delegated->setAttribute('defer', (string) $defer);
        return $this;
    }

    public function getDefer(): ?bool
    {
        return $this->defer;
    }

    public function setIntegrity(string $integrity): static
    {
        $this->integrity = $integrity;
        $this->delegated->setAttribute('integrity', (string) $integrity);
        return $this;
    }

    public function getIntegrity(): ?string
    {
        return $this->integrity;
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

    public function setReferrerpolicy(string|ReferrerpolicyEnum $referrerpolicy): static
    {
        if (\is_string($referrerpolicy)) {
            $referrerpolicy = ReferrerpolicyEnum::tryFrom($referrerpolicy) ?? throw new \InvalidArgumentException("Invalid value for \$referrerpolicy.");
        }
        $this->referrerpolicy = $referrerpolicy;
        $this->delegated->setAttribute('referrerpolicy', (string) $referrerpolicy->value);

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
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

    public function setType(string|ScriptTypeEnum $type): static
    {
        if (\is_string($type)) {
            $type = ScriptTypeEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?ScriptTypeEnum
    {
        return $this->type;
    }

}

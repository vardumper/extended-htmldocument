<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Script - The script element is used to embed or reference an executable script within an HTML or XHTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 *
 * @generated 2025-10-19 18:53:35
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 */

namespace Html\Element\Void;

use Html\Element\Block\Body;
use Html\Element\Block\Form;
use Html\Element\Block\Menu;
use Html\Element\VoidElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\TypeScriptEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('script')]
class Script extends VoidElement
{
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
    public static array $childOf = [Body::class, Form::class, Head::class, Menu::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that the script will be executed asynchronously as soon as it is available.
     */
    public ?bool $async = null;

    /**
     * Specifies the character encoding for the resource.
     */
    public ?string $charset = null;

    /**
     * When present, it specifies that the script should be executed after the page has been parsed.
     */
    public ?bool $defer = null;

    /**
     * Specifies the integrity value of a resource.
     */
    public ?string $integrity = null;

    /**
     * Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks.
     */
    public ?string $nonce = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    protected ?CrossoriginEnum $crossorigin = null;

    /**
     * Specifies the referrer policy for fetches initiated by the element.
     */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /**
     * Specifies the media type of the linked resource.
     * @example text/javascript
     */
    protected ?TypeScriptEnum $type = null;

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

    public function setType(string|TypeScriptEnum $type): static
    {
        if (is_string($type)) {
            $type = TypeScriptEnum::tryFrom($type) ?? throw new InvalidArgumentException('Invalid value for $type.');
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?TypeScriptEnum
    {
        return $this->type;
    }
}

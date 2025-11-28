<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meta - The meta element provides metadata about the HTML document. Metadata will not be displayed on the page, but is machine-readable. Mainly used in the head but allowed inside the body if itemprop attribute is set.
 *
 * @generated 2025-11-28 14:53:40
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\HttpEquivEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

#[Element('meta')]
class Meta extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\TitleTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'meta';

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
    public static array $childOf = [Head::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the character encoding for the resource.
     */
    protected ?string $charset = null;

    /**
     * Specifies the value associated with the http-equiv or name attribute.
     */
    protected ?string $content = null;

    /**
     * Provides an HTTP header for the information/value of the content attribute.
     */
    protected ?HttpEquivEnum $httpEquiv = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    protected ?string $name = null;

    /**
     * Specifies the content type of the value attribute when the http-equiv attribute is used.
     */
    protected ?string $scheme = null;

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

    public function setContent(string $content): static
    {
        $this->content = $content;
        $this->delegated->setAttribute('content', (string) $content);
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setHttpEquiv(string|HttpEquivEnum $httpEquiv): static
    {
        if (\is_string($httpEquiv)) {
            $httpEquiv = HttpEquivEnum::tryFrom($httpEquiv) ?? throw new InvalidArgumentException(
                'Invalid value for $httpEquiv.'
            );
        }
        $this->httpEquiv = $httpEquiv;
        $this->delegated->setAttribute('http-equiv', (string) $httpEquiv->value);

        return $this;
    }

    public function getHttpEquiv(): ?HttpEquivEnum
    {
        return $this->httpEquiv;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->delegated->setAttribute('name', (string) $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setScheme(string $scheme): static
    {
        $this->scheme = $scheme;
        $this->delegated->setAttribute('scheme', (string) $scheme);
        return $this;
    }

    public function getScheme(): ?string
    {
        return $this->scheme;
    }
}

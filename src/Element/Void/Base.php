<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Base - The base element specifies the base URL to use for all relative URLs in a document. There can be at maximum one <base> element in a document, and it must be inside the <head> element.
 *
 * @generated 2025-03-21 21:04:01
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\TargetEnum;
use InvalidArgumentException;

class Base extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'base';

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
    public static bool $uniquePerParent = true;

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
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public ?string $href = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    protected ?TargetEnum $target = null;

    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->htmlElement->setAttribute('href', $href);
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setTarget(string|TargetEnum $target): self
    {
        if (is_string($target)) {
            $target = TargetEnum::tryFrom($target) ?? throw new InvalidArgumentException('Invalid value for $target.');
        }
        $this->target = $target;
        $this->htmlElement->setAttribute('target', (string) $target->value);

        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
    }
}

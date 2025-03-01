<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 *
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\TypeEnum;

class Style extends VoidElement
{
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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies the media type for which the linked resource or style sheet is intended.
     */
    public ?string $media = null;

    /**
     * Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks.
     */
    public ?string $nonce = null;

    /**
     * Specifies additional information about the element, typically displayed as a tooltip.
     */
    public ?string $title = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?TypeEnum $type = null;
}

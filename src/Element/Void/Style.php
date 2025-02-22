<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 */
namespace Html\Element\Void;

use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Style extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'style';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * When present, it specifies that an input element should be disabled.
     * @category HTML attribute */
    public ?bool $disabled;

    /** 
     * Specifies the media type for which the linked resource or style sheet is intended.
     * @category HTML attribute */
    public ?string $media;

    /** 
     * Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks.
     * @category HTML attribute */
    public ?string $nonce;

    /** 
     * Specifies additional information about the element, typically displayed as a tooltip.
     * @category HTML attribute */
    public ?string $title;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\TypeEnum;

class Source extends VoidElement
{
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

    /** Specifies the sizes of the images or icons for different display/window sizes. */
    public ?string $sizes = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** Specifies the media type of the linked resource. */
    public ?TypeEnum $type = null;

}

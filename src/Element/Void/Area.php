<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 *
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\RelEnum;
use Html\Enum\ShapeEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;

class Area extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'area';

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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @required
     */
    public string $alt;

    /**
     * Specifies the coordinates of the shape in a rectangular area or a polygonal area on an image map.
     */
    public ?string $coords = null;

    /**
     * Indicates that the linked content should be downloaded rather than displayed.
     */
    public ?string $download = null;

    /**
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public string $href;

    /**
     * Specifies the language of the linked resource.
     */
    public ?string $hreflang = null;

    /**
     * Specifies the relationship between the current document and the linked document.
     */
    public ?RelEnum $rel = null;

    public ?ShapeEnum $shape = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?TypeEnum $type = null;
}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ObjectElement - The object element represents an external resource, which can be treated as an image, a nested browsing context, or a resource to be handled by a plugin.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/object
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\TypeEnum;

class ObjectElement extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'object';

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
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the address of the external data that the object requires.
     */
    public ?string $data;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?TypeEnum $type;

    /**
     * Specifies a client-side image map to be used with the element.
     */
    public ?string $usemap;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width;
}

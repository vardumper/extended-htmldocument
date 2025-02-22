<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Map - The map element, in conjunction with an img element and any area element descendants, defines an image map. The element represents a related collection of map areas.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
 */

namespace Html\Element\Block;

use Html\Element\Void\Area;
use Html\Model\BlockElement;

class Map extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'map';

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
    public static array $parentOf = [Area::class];

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;
}

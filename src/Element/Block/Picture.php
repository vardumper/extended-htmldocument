<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Picture - The picture element contains zero or more source elements and one img element to offer alternative versions of an image for different display/device scenarios.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture
 */

namespace Html\Element\Block;

use Html\Element\Inline\Image;
use Html\Element\Void\Source;
use Html\Model\BlockElement;

class Picture extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'picture';

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
    public static array $parentOf = [Image::class, Source::class];
}

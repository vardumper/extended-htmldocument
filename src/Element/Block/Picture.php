<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Picture - The picture element contains zero or more source elements and one img element to offer alternative versions of an image for different display/device scenarios.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Image;
use Html\Element\Inline\MarkedText;
use Html\Element\Void\Source;
use Html\Mapping\Element;

#[Element('picture')]
class Picture extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'picture';

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
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Image::class, Source::class];
}

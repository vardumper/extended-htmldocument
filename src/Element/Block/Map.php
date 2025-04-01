<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Map - The map element, in conjunction with an img element and any area element descendants, defines an image map. The element represents a related collection of map areas.
 *
 * @generated 2025-03-31 18:21:39
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Void\Area;
use Html\Mapping\Element;

#[Element('map')]
class Map extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'map';

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
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Area::class];

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->delegated->setAttribute('name', $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}

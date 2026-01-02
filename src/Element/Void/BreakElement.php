<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
 */

namespace Html\Element\Void;

use Html\Element\Block\{
    Article,
    Aside,
    Body,
    DefinitionDescription,
    Division,
    Footer,
    Header,
    Main,
    Paragraph,
    Section,
};
use Html\Element\Inline\MarkedText;
use Html\Element\VoidElement;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;

/**
 * The br element represents a line break.
 */
#[Element('br')]
class BreakElement extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\AlpineJsTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'br';

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];
}

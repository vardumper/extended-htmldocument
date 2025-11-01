<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DefinitionList - The dl element represents an association list consisting of zero or more name-value groups (a description list). Each group must consist of one or more names (dt elements) followed by one or more values (dd elements). Within a single dl element, there should not be more than one dt element for each name.
 *
 * @generated 2025-11-01 15:04:49
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Slot;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;

#[Element('dl')]
class DefinitionList extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\AutofocusTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'dl';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

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
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [DefinitionDescription::class, DefinitionTerm::class];
}

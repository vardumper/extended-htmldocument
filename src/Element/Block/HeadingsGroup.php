<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * HeadingsGroup - The hgroup element represents a multi-level heading for a section of a document. It groups a set of h1–h6 elements.
 *
 * @generated 2025-10-31 21:58:00
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hgroup
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute\AccesskeyTrait;
use Html\Trait\GlobalAttribute\AutocapitalizeTrait;
use Html\Trait\GlobalAttribute\AutofocusTrait;
use Html\Trait\GlobalAttribute\ClassTrait;
use Html\Trait\GlobalAttribute\ContenteditableTrait;
use Html\Trait\GlobalAttribute\DataTrait;
use Html\Trait\GlobalAttribute\DirTrait;
use Html\Trait\GlobalAttribute\DraggableTrait;
use Html\Trait\GlobalAttribute\HiddenTrait;
use Html\Trait\GlobalAttribute\IdTrait;
use Html\Trait\GlobalAttribute\InputmodeTrait;
use Html\Trait\GlobalAttribute\LangTrait;
use Html\Trait\GlobalAttribute\SpellcheckTrait;
use Html\Trait\GlobalAttribute\StyleTrait;
use Html\Trait\GlobalAttribute\TabindexTrait;
use Html\Trait\GlobalAttribute\TitleTrait;
use Html\Trait\GlobalAttribute\TranslateTrait;

#[Element('hgroup')]
class HeadingsGroup extends BlockElement
{
    use AccesskeyTrait;

    use AutocapitalizeTrait;

    use AutofocusTrait;

    use ClassTrait;

    use ContenteditableTrait;

    use DataTrait;

    use DirTrait;

    use DraggableTrait;

    use HiddenTrait;

    use IdTrait;

    use InputmodeTrait;

    use LangTrait;

    use SpellcheckTrait;

    use StyleTrait;

    use TabindexTrait;

    use TitleTrait;

    use TranslateTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'hgroup';

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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
    ];
}

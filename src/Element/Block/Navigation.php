<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Navigation - The nav element represents a section of a page whose purpose is to provide navigation links, either within the current document or to other documents.
 * 
 * @generated 2025-11-01 15:04:49
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Body;
use Html\Element\Block\Paragraph;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\Small;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('nav')]
class Navigation extends BlockElement
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
    public const string QUALIFIED_NAME = 'nav';

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
        Body::class,
        Paragraph::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Article::class,
        Citation::class,
        Emphasis::class,
        Quotation::class,
        Strikethrough::class,
        Small::class,
        Strong::class,
    ];




}

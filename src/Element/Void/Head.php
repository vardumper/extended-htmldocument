<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Head - The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.
 * 
 * @generated 2025-11-07 16:53:19
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 */
namespace Html\Element\Void;

use Html\Element\Block\HTML;
use Html\Element\Block\NoScript;
use Html\Element\VoidElement;
use Html\Element\Void\Base;
use Html\Element\Void\Link;
use Html\Element\Void\Meta;
use Html\Element\Void\Script;
use Html\Element\Void\Style;
use Html\Element\Void\Title;
use Html\Mapping\Element;

#[Element('head')]
class Head extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'head';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = true;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        HTML::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
        Base::class,
        Link::class,
        Meta::class,
        NoScript::class,
        Script::class,
        Style::class,
        Title::class,
    ];


}

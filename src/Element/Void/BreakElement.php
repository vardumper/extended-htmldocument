<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * BreakElement - The br element represents a line break.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
 */
namespace Html\Element\Void;

use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Inline\Address;
use Html\Element\Inline\MarkedText;
use Html\Element\VoidElement;
use Html\Enum\ClearEnum;

class BreakElement extends VoidElement
{
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
        Address::class,
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
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** 
     * 
     * @category HTML attribute
     * @deprecated
     */
    protected ?ClearEnum $clear = null;


    public function setClear(ClearEnum $clear): self
    {
        $this->clear = $clear;
        $this->htmlElement->setAttribute('clear', $clear->value);
        return $this;
    }

    public function getClear(): ?ClearEnum
    {
        return $this->clear;
    }

}

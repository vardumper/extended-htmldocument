<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * InlineFrame - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 */
namespace Html\Element\Block;

use Html\Enum\ReferrerpolicyEnum;
use Html\Model\BlockElement;

class InlineFrame extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'iframe';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Enables the iframe to be displayed in fullscreen mode.
     * @category HTML attribute */
    public ?bool $allowfullscreen;

    /** 
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $height;

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

    /** 
     * Specifies the referrer policy for fetches initiated by the element.
     * @category HTML attribute */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /** 
     * 
     * @category HTML attribute */
    public ?string $sandbox;

    /** 
     * When present, it specifies that the iframe should look like it is a part of the containing document (no borders or scrollbars).
     * @category HTML attribute */
    public ?bool $seamless;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** 
     * 
     * @category HTML attribute */
    public ?string $srcdoc;

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $width;

}

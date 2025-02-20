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
    public static string $qualifiedName = 'iframe';

    /* Enables the iframe to be displayed in fullscreen mode. */
    public ?bool $allowfullscreen;

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /*  */
    public ?string $sandbox;

    /* When present, it specifies that the iframe should look like it is a part of the containing document (no borders or scrollbars). */
    public ?bool $seamless;

    /* 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /*  */
    public ?string $srcdoc;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;


}

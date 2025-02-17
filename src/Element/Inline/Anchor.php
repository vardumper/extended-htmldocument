<?php
/**
 * Anchor - The a element represents a hyperlink, linking to another resource.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 */
namespace Html\Element\Inline;

use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;
use Html\Model\InlineElement;

class Anchor extends InlineElement
{
    public static string $qualifiedName = 'a';

    /* 
     * Indicates that the linked content should be downloaded rather than displayed.
     * @example filename.pdf
     */
    public ?string $download;

    /* 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public string $href;

    /* 
     * Specifies the language of the linked resource.
     * @example en
     */
    public ?string $hreflang;

    /* Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel;

    /* 
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target;

    /* Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;


    public function __construct()
    {

    }


}
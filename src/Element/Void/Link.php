<?php
/**
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 */
namespace Html\Element\Void;

use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\RelEnum;
use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Link extends VoidElement
{
    public static string $qualifiedName = 'link';

    /*  */
    public ?CrossoriginEnum $crossorigin;

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

    /* Specifies the integrity value of a resource. */
    public ?string $integrity;

    /* Specifies the media type for which the linked resource or style sheet is intended. */
    public ?string $media;

    /* Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /* Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel;

    /* Specifies the sizes of the images or icons for different display/window sizes. */
    public ?string $sizes;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;


    public function __construct()
    {

    }


}
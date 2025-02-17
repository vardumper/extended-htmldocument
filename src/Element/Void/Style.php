<?php
/**
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 */
namespace Html\Element\Void;

use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Style extends VoidElement
{
    public static string $qualifiedName = 'style';

    /* When present, it specifies that an input element should be disabled. */
    public ?bool $disabled;

    /* Specifies the media type for which the linked resource or style sheet is intended. */
    public ?string $media;

    /* Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks. */
    public ?string $nonce;

    /* Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;


    public function __construct()
    {

    }


}
<?php
/**
 * ObjectElement - The object element represents an external resource, which can be treated as an image, a nested browsing context, or a resource to be handled by a plugin.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/object
 */
namespace Html\Element\Block;

use Html\Enum\TypeEnum;
use Html\Model\BlockElement;

class ObjectElement extends BlockElement
{
    public static string $qualifiedName = 'object';

    /* Specifies the address of the external data that the object requires. */
    public ?string $data;

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

    /* Specifies a client-side image map to be used with the element. */
    public ?string $usemap;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;


    public function __construct()
    {

    }


}
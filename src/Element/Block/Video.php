<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Video - The video element is used to embed video content in a document, such as a movie clip or other video streams.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video
 */

namespace Html\Element\Block;

use Html\Enum\CrossoriginEnum;
use Html\Enum\PreloadEnum;
use Html\Model\BlockElement;

class Video extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'video';

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that the audio or video will automatically start playing as soon as it can do so without stopping.
     */
    public ?bool $autoplay;

    /**
     * When present, it specifies that audio or video controls should be displayed (such as play, pause, and volume).
     */
    public ?bool $controls;

    public ?CrossoriginEnum $crossorigin;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height;

    /**
     * When present, it specifies that the audio or video will start over again every time it is finished.
     */
    public ?bool $loop;

    /**
     * When present, it specifies that the audio output of the video should be muted.
     */
    public ?bool $muted;

    /**
     * Specifies the URL of an image to be displayed as the video's poster (thumbnail) image.
     */
    public ?string $poster;

    public ?PreloadEnum $preload;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width;
}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Audio - The audio element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the source element.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
 */

namespace Html\Element\Block;

use Html\Enum\CrossoriginEnum;
use Html\Enum\PreloadEnum;
use Html\Model\BlockElement;

class Audio extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'audio';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];

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
     * When present, it specifies that the audio or video will start over again every time it is finished.
     */
    public ?bool $loop;

    /**
     * When present, it specifies that the audio output of the video should be muted.
     */
    public ?bool $muted;

    public ?PreloadEnum $preload;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;
}

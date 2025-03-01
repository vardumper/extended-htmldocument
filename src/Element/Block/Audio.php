<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Audio - The audio element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the source element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\PreloadEnum;

class Audio extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'audio';

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
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** When present, it specifies that the audio or video will automatically start playing as soon as it can do so without stopping. */
    public ?bool $autoplay;

    /** When present, it specifies that audio or video controls should be displayed (such as play, pause, and volume). */
    public ?bool $controls;

    /**  */
    public ?CrossoriginEnum $crossorigin;

    /** When present, it specifies that the audio or video will start over again every time it is finished. */
    public ?bool $loop;

    /** When present, it specifies that the audio output of the video should be muted. */
    public ?bool $muted;

    /**  */
    public ?PreloadEnum $preload;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Track - The track element is used as a child of the media elements—audio and video. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
 */
namespace Html\Element\Void;

use Html\Enum\KindEnum;
use Html\Model\VoidElement;

class Track extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'track';

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
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Specifies that the track should be enabled by default when the page loads.
     * @category HTML attribute */
    public ?bool $default;

    /** 
     * 
     * @category HTML attribute */
    public ?KindEnum $kind;

    /** 
     * Specifies a label for the associated form control, option group, or option.
     * @category HTML attribute */
    public ?string $label;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** 
     * Specifies the language of the track text data.
     * @category HTML attribute */
    public ?string $srclang;

}

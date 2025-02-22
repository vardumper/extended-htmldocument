<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Body extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'body';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = true;

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
     * Fires after the associated document has started printing or the print preview has been closed.
     * @category HTML attribute */
    public ?string $onafterprint;

    /** 
     * Fires before the associated document is printed or previewed for printing.
     * @category HTML attribute */
    public ?string $onbeforeprint;

    /** 
     * Fires before the user navigates away from the page.
     * @category HTML attribute */
    public ?string $onbeforeunload;

    /** 
     * Fires when the fragment identifier part of the URL changes.
     * @category HTML attribute */
    public ?string $onhashchange;

    /** 
     * Fires when the user changes the preferred language of the user interface.
     * @category HTML attribute */
    public ?string $onlanguagechange;

    /** 
     * Fires when a message is received from a different browsing context (e.g., an iframe).
     * @category HTML attribute */
    public ?string $onmessage;

    /** 
     * Fires when an error occurs while receiving a message from a different browsing context.
     * @category HTML attribute */
    public ?string $onmessageerror;

    /** 
     * Fires when the browser goes offline.
     * @category HTML attribute */
    public ?string $onoffline;

    /** 
     * Fires when the browser goes online.
     * @category HTML attribute */
    public ?string $ononline;

    /** 
     * Fires when the user navigates away from a page.
     * @category HTML attribute */
    public ?string $onpagehide;

    /** 
     * Fires when the user navigates to a page.
     * @category HTML attribute */
    public ?string $onpageshow;

    /** 
     * Fires when the user navigates through the history by clicking the browser's Back or Forward buttons.
     * @category HTML attribute */
    public ?string $onpopstate;

    /** 
     * Fires when a Promise is rejected and the rejection is handled by a Promise handler (e.g., catch).
     * @category HTML attribute */
    public ?string $onrejectionhandled;

    /** 
     * Fires when a storage area (e.g., localStorage or sessionStorage) changes.
     * @category HTML attribute */
    public ?string $onstorage;

    /** 
     * Fires when a Promise is rejected but there is no rejection handler (e.g., catch).
     * @category HTML attribute */
    public ?string $onunhandledrejection;

    /** 
     * Fires when the user is navigating away from the page (similar to onbeforeunload).
     * @category HTML attribute */
    public ?string $onunload;

}

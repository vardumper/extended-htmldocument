<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Body extends BlockElement
{
    public static string $qualifiedName = 'body';

    /* Fires after the associated document has started printing or the print preview has been closed. */
    public ?string $onafterprint;

    /* Fires before the associated document is printed or previewed for printing. */
    public ?string $onbeforeprint;

    /* Fires before the user navigates away from the page. */
    public ?string $onbeforeunload;

    /* Fires when the fragment identifier part of the URL changes. */
    public ?string $onhashchange;

    /* Fires when the user changes the preferred language of the user interface. */
    public ?string $onlanguagechange;

    /* Fires when a message is received from a different browsing context (e.g., an iframe). */
    public ?string $onmessage;

    /* Fires when an error occurs while receiving a message from a different browsing context. */
    public ?string $onmessageerror;

    /* Fires when the browser goes offline. */
    public ?string $onoffline;

    /* Fires when the browser goes online. */
    public ?string $ononline;

    /* Fires when the user navigates away from a page. */
    public ?string $onpagehide;

    /* Fires when the user navigates to a page. */
    public ?string $onpageshow;

    /* Fires when the user navigates through the history by clicking the browser's Back or Forward buttons. */
    public ?string $onpopstate;

    /* Fires when a Promise is rejected and the rejection is handled by a Promise handler (e.g., catch). */
    public ?string $onrejectionhandled;

    /* Fires when a storage area (e.g., localStorage or sessionStorage) changes. */
    public ?string $onstorage;

    /* Fires when a Promise is rejected but there is no rejection handler (e.g., catch). */
    public ?string $onunhandledrejection;

    /* Fires when the user is navigating away from the page (similar to onbeforeunload). */
    public ?string $onunload;
}

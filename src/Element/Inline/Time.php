<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Time - The time element represents a specific period in time. It may include the datetime attribute to translate dates into machine-readable format, allowing for better search engine results or custom features such as reminders.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Time extends InlineElement
{
    public static string $qualifiedName = 'time';

    /* Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it. */
    public ?string $datetime;


}

<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DataList - The datalist element contains a set of option elements that represent the permissible or recommended options available to users.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class DataList extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'datalist';

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
    public static array $parentOf = [Option::class];
}

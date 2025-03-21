<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DataList - The datalist element contains a set of option elements that represent the permissible or recommended options available to users.
 *
 * @generated 2025-03-21 21:04:01
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;

class DataList extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'datalist';

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
    public static array $childOf = [Body::class, Fieldset::class, Form::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Option::class];
}

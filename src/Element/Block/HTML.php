<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HTML - The root element of an HTML document. It represents the top-level of the HTML structure.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Body;
use Html\Element\Void\Head;

class HTML extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'html';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = true;

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
        Body::class,
        Head::class,
    ];


    /** Specifies the address of the document's cache manifest. */
    public ?string $manifest = null;


    public function setManifest(string $manifest): self
    {
        $this->manifest = $manifest;
        return $this;
    }

    public function getManifest(): ?string
    {
        return $this->manifest;
    }


}

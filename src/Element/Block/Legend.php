<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Legend - The legend element represents a caption for the content of its parent fieldset.
 * 
 * @generated 2025-03-08 16:37:58
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Form;

class Legend extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'legend';

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
        Fieldset::class,
        Form::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the default value of the <textarea> element. */
    public ?string $text = null;


    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }


}

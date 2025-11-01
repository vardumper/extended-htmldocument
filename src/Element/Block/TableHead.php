<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableHead - The thead element groups the header content in a table.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Table;
use Html\Element\Block\TableRow;
use Html\Enum\AriaHiddenEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('thead')]
class TableHead extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\AutofocusTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'thead';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Table::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        TableRow::class,
    ];


    /** 
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @category HTML attribute
     * @example false
     */
    public ?AriaHiddenEnum $ariaHidden = null;


    public function setAriaHidden(string|AriaHiddenEnum $ariaHidden): static
    {
        if (is_string($ariaHidden)) {
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new \InvalidArgumentException("Invalid value for \$ariaHidden.");
        }
        $this->ariaHidden = $ariaHidden;
        $this->delegated->setAttribute('aria-hidden', (string) $ariaHidden->value);

        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
    }


}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Summary - The summary element represents a summary, caption, or legend for the rest of the contents of the summary element's parent details element, if any.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Aside;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Details;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AriaLabelEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('summary')]
class Summary extends BlockElement
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
    public const string QUALIFIED_NAME = 'summary';

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
        Details::class,
        Aside::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Form::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Defines a string value that labels the current element for assistive technologies. */
    public null|string|AriaLabelEnum $ariaLabel = null;


    public function setAriaLabel(string|AriaLabelEnum $ariaLabel): static
    {
        $value = $ariaLabel;
        if (is_string($ariaLabel)) {
            $resolved = AriaLabelEnum::tryFrom($ariaLabel);
            if (!is_null($resolved)) {
                $ariaLabel = $resolved;
            }
        }
        if ($ariaLabel instanceof AriaLabelEnum) {
            $value = $ariaLabel->value;
        }
        $this->ariaLabel = $ariaLabel;
        $this->delegated->setAttribute('aria-label', (string) $value);

        return $this;
    }

    public function getAriaLabel(): null|string|AriaLabelEnum
    {
        return $this->ariaLabel;
    }


}

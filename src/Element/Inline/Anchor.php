<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Anchor - The a element represents a hyperlink, linking to another resource.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 */
namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\Navigation;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\ScalableVectorGraphics;
use Html\Element\Inline\Slot;
use Html\Enum\ARoleEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaLabelEnum;
use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('a')]
class Anchor extends InlineElement
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
    public const string QUALIFIED_NAME = 'a';

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
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        MarkedText::class,
        Navigation::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        ScalableVectorGraphics::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Indicates that the linked content should be downloaded rather than displayed. */
    public ?string $download = null;

    /** 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @category HTML attribute
     * @required
     */
    public ?string $href = null;

    /** Specifies the language of the linked resource. */
    public ?string $hreflang = null;

    /** Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel = null;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    public null|string|TargetEnum $target = null;

    /** Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title = null;

    /** Specifies the media type of the linked resource. */
    public ?string $type = null;

    /** Defines the semantic purpose of an element for assistive technologies. */
    public null|string|ARoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    public ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    public ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
    public ?string $ariaLabelledby = null;

    /** 
     * Indicates the current item within a container or set of related elements.
     * @category HTML attribute
     * @example false
     */
    public null|string|AriaCurrentEnum $ariaCurrent = null;

    /** 
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @category HTML attribute
     * @example false
     */
    public null|string|AriaBusyEnum $ariaBusy = null;

    /** Defines a string value that labels the current element for assistive technologies. */
    public null|string|AriaLabelEnum $ariaLabel = null;

    /** 
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @category HTML attribute
     * @example false
     */
    public ?AriaDisabledEnum $ariaDisabled = null;


    public function setDownload(string $download): static
    {
        $this->download = $download;
        $this->delegated->setAttribute('download', (string) $download);
        return $this;
    }

    public function getDownload(): ?string
    {
        return $this->download;
    }

    public function setHref(string $href): static
    {
        $this->href = $href;
        $this->delegated->setAttribute('href', (string) $href);
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(string $hreflang): static
    {
        $this->hreflang = $hreflang;
        $this->delegated->setAttribute('hreflang', (string) $hreflang);
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setRel(string|RelEnum $rel): static
    {
        if (is_string($rel)) {
            $rel = RelEnum::tryFrom($rel) ?? throw new \InvalidArgumentException("Invalid value for \$rel.");
        }
        $this->rel = $rel;
        $this->delegated->setAttribute('rel', (string) $rel->value);

        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setTarget(string|TargetEnum $target): static
    {
        $value = $target;
        if (is_string($target)) {
            $resolved = TargetEnum::tryFrom($target);
            if (!is_null($resolved)) {
                $target = $resolved;
            }
        }
        if ($target instanceof TargetEnum) {
            $value = $target->value;
        }
        $this->target = $target;
        $this->delegated->setAttribute('target', (string) $value);

        return $this;
    }

    public function getTarget(): null|string|TargetEnum
    {
        return $this->target;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        $this->delegated->setAttribute('title', (string) $title);
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setRole(string|ARoleEnum $role): static
    {
        $value = $role;
        if (is_string($role)) {
            $resolved = ARoleEnum::tryFrom($role);
            if (!is_null($resolved)) {
                $role = $resolved;
            }
        }
        if ($role instanceof ARoleEnum) {
            $value = $role->value;
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $value);

        return $this;
    }

    public function getRole(): null|string|ARoleEnum
    {
        return $this->role;
    }

    public function setAriaControls(string $ariaControls): static
    {
        $this->ariaControls = $ariaControls;
        $this->delegated->setAttribute('aria-controls', (string) $ariaControls);
        return $this;
    }

    public function getAriaControls(): ?string
    {
        return $this->ariaControls;
    }

    public function setAriaDescribedby(string $ariaDescribedby): static
    {
        $this->ariaDescribedby = $ariaDescribedby;
        $this->delegated->setAttribute('aria-describedby', (string) $ariaDescribedby);
        return $this;
    }

    public function getAriaDescribedby(): ?string
    {
        return $this->ariaDescribedby;
    }

    public function setAriaLabelledby(string $ariaLabelledby): static
    {
        $this->ariaLabelledby = $ariaLabelledby;
        $this->delegated->setAttribute('aria-labelledby', (string) $ariaLabelledby);
        return $this;
    }

    public function getAriaLabelledby(): ?string
    {
        return $this->ariaLabelledby;
    }

    public function setAriaCurrent(string|AriaCurrentEnum $ariaCurrent): static
    {
        $value = $ariaCurrent;
        if (is_string($ariaCurrent)) {
            $resolved = AriaCurrentEnum::tryFrom($ariaCurrent);
            if (!is_null($resolved)) {
                $ariaCurrent = $resolved;
            }
        }
        if ($ariaCurrent instanceof AriaCurrentEnum) {
            $value = $ariaCurrent->value;
        }
        $this->ariaCurrent = $ariaCurrent;
        $this->delegated->setAttribute('aria-current', (string) $value);

        return $this;
    }

    public function getAriaCurrent(): null|string|AriaCurrentEnum
    {
        return $this->ariaCurrent;
    }

    public function setAriaBusy(string|AriaBusyEnum $ariaBusy): static
    {
        $value = $ariaBusy;
        if (is_string($ariaBusy)) {
            $resolved = AriaBusyEnum::tryFrom($ariaBusy);
            if (!is_null($resolved)) {
                $ariaBusy = $resolved;
            }
        }
        if ($ariaBusy instanceof AriaBusyEnum) {
            $value = $ariaBusy->value;
        }
        $this->ariaBusy = $ariaBusy;
        $this->delegated->setAttribute('aria-busy', (string) $value);

        return $this;
    }

    public function getAriaBusy(): null|string|AriaBusyEnum
    {
        return $this->ariaBusy;
    }

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

    public function setAriaDisabled(string|AriaDisabledEnum $ariaDisabled): static
    {
        if (is_string($ariaDisabled)) {
            $ariaDisabled = AriaDisabledEnum::tryFrom($ariaDisabled) ?? throw new \InvalidArgumentException("Invalid value for \$ariaDisabled.");
        }
        $this->ariaDisabled = $ariaDisabled;
        $this->delegated->setAttribute('aria-disabled', (string) $ariaDisabled->value);

        return $this;
    }

    public function getAriaDisabled(): ?AriaDisabledEnum
    {
        return $this->ariaDisabled;
    }

}

<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * InlineFrame - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaLabelEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\RoleEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('iframe')]
class InlineFrame extends BlockElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'iframe';

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


    /** Enables the iframe to be displayed in fullscreen mode. */
    public ?bool $allowfullscreen = null;

    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy = null;

    /**  */
    public ?string $sandbox = null;

    /** When present, it specifies that the iframe should look like it is a part of the containing document (no borders or scrollbars). */
    public ?bool $seamless = null;

    /** Specifies the URL of the external resource to be embedded or referenced. */
    public ?string $src = null;

    /** The value of srcdoc is a string containing HTML markup, which the browser will display as the content of the iframe. */
    public ?string $srcdoc = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;

    /** Defines the semantic purpose of an element for assistive technologies. */
    public null|string|RoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    public ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    public ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
    public ?string $ariaLabelledby = null;

    /** 
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @category HTML attribute
     * @example false
     */
    public null|string|AriaBusyEnum $ariaBusy = null;

    /** 
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @category HTML attribute
     * @example false
     */
    public ?AriaHiddenEnum $ariaHidden = null;

    /** Defines a string value that labels the current element for assistive technologies. */
    public null|string|AriaLabelEnum $ariaLabel = null;


    public function setAllowfullscreen(bool $allowfullscreen): static
    {
        $this->allowfullscreen = $allowfullscreen;
        $this->delegated->setAttribute('allowfullscreen', (string) $allowfullscreen);
        return $this;
    }

    public function getAllowfullscreen(): ?bool
    {
        return $this->allowfullscreen;
    }

    public function setHeight(string $height): static
    {
        $this->height = $height;
        $this->delegated->setAttribute('height', (string) $height);
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->delegated->setAttribute('name', (string) $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setReferrerpolicy(string|ReferrerpolicyEnum $referrerpolicy): static
    {
        if (is_string($referrerpolicy)) {
            $referrerpolicy = ReferrerpolicyEnum::tryFrom($referrerpolicy) ?? throw new \InvalidArgumentException("Invalid value for \$referrerpolicy.");
        }
        $this->referrerpolicy = $referrerpolicy;
        $this->delegated->setAttribute('referrerpolicy', (string) $referrerpolicy->value);

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setSandbox(string $sandbox): static
    {
        $this->sandbox = $sandbox;
        $this->delegated->setAttribute('sandbox', (string) $sandbox);
        return $this;
    }

    public function getSandbox(): ?string
    {
        return $this->sandbox;
    }

    public function setSeamless(bool $seamless): static
    {
        $this->seamless = $seamless;
        $this->delegated->setAttribute('seamless', (string) $seamless);
        return $this;
    }

    public function getSeamless(): ?bool
    {
        return $this->seamless;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', (string) $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcdoc(string $srcdoc): static
    {
        $this->srcdoc = $srcdoc;
        $this->delegated->setAttribute('srcdoc', (string) $srcdoc);
        return $this;
    }

    public function getSrcdoc(): ?string
    {
        return $this->srcdoc;
    }

    public function setWidth(string $width): static
    {
        $this->width = $width;
        $this->delegated->setAttribute('width', (string) $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setRole(string|RoleEnum $role): static
    {
        $value = $role;
        if (is_string($role)) {
            $resolved = RoleEnum::tryFrom($role);
            if (!is_null($resolved)) {
                $role = $resolved;
            }
        }
        if ($role instanceof RoleEnum) {
            $value = $role->value;
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $value);

        return $this;
    }

    public function getRole(): null|string|RoleEnum
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

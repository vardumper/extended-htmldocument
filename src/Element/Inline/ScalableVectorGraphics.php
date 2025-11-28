<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ScalableVectorGraphics - The svg element is a container for embedded SVG graphics.
 *
 * @generated 2025-11-28 14:53:40
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/svg
 */

namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Element\Void\Script;
use Html\Element\Void\Style;
use Html\Element\Void\Title;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\RoleEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

#[Element('svg')]
class ScalableVectorGraphics extends InlineElement
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
    use GlobalAttribute\SlotTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    use GlobalAttribute\PopoverTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'svg';

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
    public static array $childOf = [self::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Script::class,
        Style::class,
        self::class,
        Title::class,
    ];

    /**
     * Specifies the XML namespace for the SVG element.
     * @example http://www.w3.org/2000/svg
     */
    protected ?string $xmlns = null;

    /**
     * Defines the position and dimension, in user space, of an SVG viewport.
     */
    protected ?string $viewBox = null;

    /**
     * Specifies the color of the stroke (outline) of shapes.
     */
    protected ?string $stroke = null;

    /**
     * Specifies the color of the interior of shapes.
     */
    protected ?string $fill = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    protected ?string $width = null;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    protected ?string $height = null;

    /**
     * Defines the semantic purpose of an element for assistive technologies.
     */
    protected ?RoleEnum $role = null;

    /**
     * Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space
     */
    protected ?string $ariaControls = null;

    /**
     * Identifies the element(s) that describes the object. Value is a list of IDs separated by a space
     */
    protected ?string $ariaDescribedby = null;

    /**
     * Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space
     */
    protected ?string $ariaLabelledby = null;

    /**
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @example false
     */
    protected ?AriaBusyEnum $ariaBusy = null;

    /**
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @example false
     */
    protected ?AriaHiddenEnum $ariaHidden = null;

    /**
     * Defines a string value that labels the current element for assistive technologies.
     */
    protected ?string $ariaLabel = null;

    /**
     * References an element that provides additional details about the current element.
     */
    protected ?string $ariaDetails = null;

    /**
     * Defines keyboard shortcuts available for the element.
     */
    protected ?string $ariaKeyshortcuts = null;

    /**
     * Provides a human-readable custom role description for assistive technologies.
     */
    protected ?string $ariaRoledescription = null;

    /**
     * Defines how updates to the element should be announced to screen readers.
     * @example off
     */
    protected ?AriaLiveEnum $ariaLive = null;

    /**
     * Indicates what content changes should be announced in a live region.
     * @example additions text
     */
    protected ?AriaRelevantEnum $ariaRelevant = null;

    /**
     * Indicates whether assistive technologies should present the entire region as a whole when changes occur.
     * @example false
     */
    protected ?AriaAtomicEnum $ariaAtomic = null;

    public function setXmlns(string $xmlns): static
    {
        $this->xmlns = $xmlns;
        $this->delegated->setAttribute('xmlns', (string) $xmlns);
        return $this;
    }

    public function getXmlns(): ?string
    {
        return $this->xmlns;
    }

    public function setViewBox(string $viewBox): static
    {
        $this->viewBox = $viewBox;
        $this->delegated->setAttribute('viewBox', (string) $viewBox);
        return $this;
    }

    public function getViewBox(): ?string
    {
        return $this->viewBox;
    }

    public function setStroke(string $stroke): static
    {
        $this->stroke = $stroke;
        $this->delegated->setAttribute('stroke', (string) $stroke);
        return $this;
    }

    public function getStroke(): ?string
    {
        return $this->stroke;
    }

    public function setFill(string $fill): static
    {
        $this->fill = $fill;
        $this->delegated->setAttribute('fill', (string) $fill);
        return $this;
    }

    public function getFill(): ?string
    {
        return $this->fill;
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

    public function setRole(string|RoleEnum $role): static
    {
        if (\is_string($role)) {
            $role = RoleEnum::tryFrom($role) ?? throw new InvalidArgumentException('Invalid value for $role.');
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $role->value);

        return $this;
    }

    public function getRole(): ?RoleEnum
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
        if (\is_string($ariaBusy)) {
            $ariaBusy = AriaBusyEnum::tryFrom($ariaBusy) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaBusy.'
            );
        }
        $this->ariaBusy = $ariaBusy;
        $this->delegated->setAttribute('aria-busy', (string) $ariaBusy->value);

        return $this;
    }

    public function getAriaBusy(): ?AriaBusyEnum
    {
        return $this->ariaBusy;
    }

    public function setAriaHidden(string|AriaHiddenEnum $ariaHidden): static
    {
        if (\is_string($ariaHidden)) {
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaHidden.'
            );
        }
        $this->ariaHidden = $ariaHidden;
        $this->delegated->setAttribute('aria-hidden', (string) $ariaHidden->value);

        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
    }

    public function setAriaLabel(string $ariaLabel): static
    {
        $this->ariaLabel = $ariaLabel;
        $this->delegated->setAttribute('aria-label', (string) $ariaLabel);
        return $this;
    }

    public function getAriaLabel(): ?string
    {
        return $this->ariaLabel;
    }

    public function setAriaDetails(string $ariaDetails): static
    {
        $this->ariaDetails = $ariaDetails;
        $this->delegated->setAttribute('aria-details', (string) $ariaDetails);
        return $this;
    }

    public function getAriaDetails(): ?string
    {
        return $this->ariaDetails;
    }

    public function setAriaKeyshortcuts(string $ariaKeyshortcuts): static
    {
        $this->ariaKeyshortcuts = $ariaKeyshortcuts;
        $this->delegated->setAttribute('aria-keyshortcuts', (string) $ariaKeyshortcuts);
        return $this;
    }

    public function getAriaKeyshortcuts(): ?string
    {
        return $this->ariaKeyshortcuts;
    }

    public function setAriaRoledescription(string $ariaRoledescription): static
    {
        $this->ariaRoledescription = $ariaRoledescription;
        $this->delegated->setAttribute('aria-roledescription', (string) $ariaRoledescription);
        return $this;
    }

    public function getAriaRoledescription(): ?string
    {
        return $this->ariaRoledescription;
    }

    public function setAriaLive(string|AriaLiveEnum $ariaLive): static
    {
        if (\is_string($ariaLive)) {
            $ariaLive = AriaLiveEnum::tryFrom($ariaLive) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaLive.'
            );
        }
        $this->ariaLive = $ariaLive;
        $this->delegated->setAttribute('aria-live', (string) $ariaLive->value);

        return $this;
    }

    public function getAriaLive(): ?AriaLiveEnum
    {
        return $this->ariaLive;
    }

    public function setAriaRelevant(string|AriaRelevantEnum $ariaRelevant): static
    {
        if (\is_string($ariaRelevant)) {
            $ariaRelevant = AriaRelevantEnum::tryFrom($ariaRelevant) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaRelevant.'
            );
        }
        $this->ariaRelevant = $ariaRelevant;
        $this->delegated->setAttribute('aria-relevant', (string) $ariaRelevant->value);

        return $this;
    }

    public function getAriaRelevant(): ?AriaRelevantEnum
    {
        return $this->ariaRelevant;
    }

    public function setAriaAtomic(string|AriaAtomicEnum $ariaAtomic): static
    {
        if (\is_string($ariaAtomic)) {
            $ariaAtomic = AriaAtomicEnum::tryFrom($ariaAtomic) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaAtomic.'
            );
        }
        $this->ariaAtomic = $ariaAtomic;
        $this->delegated->setAttribute('aria-atomic', (string) $ariaAtomic->value);

        return $this;
    }

    public function getAriaAtomic(): ?AriaAtomicEnum
    {
        return $this->ariaAtomic;
    }
}

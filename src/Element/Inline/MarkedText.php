<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * MarkedText - The mark element represents a run of text in one document marked or highlighted for reference or notation purposes, due to the marked passage's relevance or importance in the enclosing context.
 *
 * @generated 2025-11-02 22:39:29
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
 */

namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Audio;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\DeletedText;
use Html\Element\Block\Details;
use Html\Element\Block\Division;
use Html\Element\Block\Embed;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\InsertedText;
use Html\Element\Block\Main;
use Html\Element\Block\Map;
use Html\Element\Block\ObjectElement;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Picture;
use Html\Element\Block\Section;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\Video;
use Html\Element\InlineElement;
use Html\Element\Void\Area;
use Html\Element\Void\BreakElement;
use Html\Element\Void\Parameter;
use Html\Element\Void\Source;
use Html\Element\Void\Track;
use Html\Element\Void\WordBreakOpportunity;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\RoleEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

#[Element('mark')]
class MarkedText extends InlineElement
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
    use GlobalAttribute\PopoverTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'mark';

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
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        Area::class,
        Audio::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        DeletedText::class,
        Embed::class,
        Form::class,
        InlineFrame::class,
        Image::class,
        InsertedText::class,
        Anchor::class,
        Button::class,
        Input::class,
        Select::class,
        Textarea::class,
        Details::class,
        Summary::class,
        Map::class,
        ObjectElement::class,
        Parameter::class,
        Picture::class,
        RubyParenthesis::class,
        RubyText::class,
        Ruby::class,
        Source::class,
        Span::class,
        Table::class,
        Track::class,
        Video::class,
        WordBreakOpportunity::class,
    ];

    /**
     * Defines the semantic purpose of an element for assistive technologies.
     */
    public ?RoleEnum $role = null;

    /**
     * Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space
     */
    public ?string $ariaControls = null;

    /**
     * Identifies the element(s) that describes the object. Value is a list of IDs separated by a space
     */
    public ?string $ariaDescribedby = null;

    /**
     * Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space
     */
    public ?string $ariaLabelledby = null;

    /**
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @example false
     */
    public ?AriaBusyEnum $ariaBusy = null;

    /**
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @example false
     */
    public ?AriaHiddenEnum $ariaHidden = null;

    public function setRole(string|RoleEnum $role): static
    {
        if (is_string($role)) {
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
        if (is_string($ariaBusy)) {
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
        if (is_string($ariaHidden)) {
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
}

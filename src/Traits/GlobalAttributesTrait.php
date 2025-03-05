<?php

namespace Html\Traits;

use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use InvalidArgumentException;

/**
 * properties that exist in HTMLElement, don't need to be declared here. __set and __get will handle them
 *  - for example className, id
 *
 * properties that are declared gloabbly here and additionaly in an HTML\Element class, will be set in the HTML\Element class
 *  - for example Anchor::$title
 */
trait GlobalAttributesTrait
{
    public ?string $accessKey = null;

    public ?ContentEditableEnum $contentEditable = null;

    public ?bool $draggable = null;

    private ?AutoCapitalizeEnum $autoCapitalize = null;

    private ?DirectionEnum $dir = null;

    private ?bool $hidden = null;

    private ?bool $inert = null;

    private ?InputModeEnum $inputMode = null;

    private ?string $is = null;

    private ?string $lang = null;

    private ?string $nonce = null;

    private ?string $part = null;

    private ?string $popover = null;

    private ?string $role = null;

    private ?string $slot = null;

    private ?bool $spellCheck = null;

    private ?string $style = null;

    private ?int $tabIndex = null;

    private ?string $title = null;

    private ?string $translate = null;

    private array $dataAttributes = [];

    /**
     * @description Specifies a unique identifier for the element
     */
    public function setId(string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @description Assigns CSS class names to an element.
     */
    public function setClass(string $className): static
    {
        $this->className = $className;
        return $this;
    }

    public function getClass(): ?string
    {
        return $this->className;
    }

    /**
     * alias
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }

    /**
     * alias
     */
    public function setClassName(string $className): static
    {
        return $this->setClass($className);
    }

    /**
     * @description Specifies a keyboard shortcut to focus or activate an element.
     */
    public function setAccessKey(string $accessKey): static
    {
        $this->accessKey = $accessKey;
        $this->element->setAttribute('accesskey', $accessKey);
        return $this;
    }

    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }

    /**
     * @description Controls automatic capitalization for text input (none, sentences, words, characters).
     */
    public function setAutoCapitalize(string|AutoCapitalizeEnum $autoCapitalize): static
    {
        if (is_string($autoCapitalize)) {
            $autoCapitalize = AutoCapitalizeEnum::from($autoCapitalize);
        }
        $this->autoCapitalize = $autoCapitalize;
        $this->htmlElement->setAttribute('autocapitalize', $autoCapitalize->value);
        return $this;
    }

    public function getAutoCapitalize(): ?AutoCapitalizeEnum
    {
        return $this->autoCapitalize;
    }

    /**
     * @description Defines whether the content is editable by the user.
     */
    public function setContentEditable(
        bool|string|ContentEditableEnum $contentEditable = ContentEditableEnum::TRUE
    ): static {
        if (is_string($contentEditable) && ! in_array(
            $contentEditable,
            array_map(fn ($e) => $e->value, ContentEditableEnum::cases())
        )) {
            throw new InvalidArgumentException('Invalid value for contenteditable');
        }
        $contentEditable = is_bool(
            $contentEditable
        ) ? ($contentEditable === true ? 'true' : 'false') : $contentEditable;
        $contentEditable = is_string($contentEditable) ? ContentEditableEnum::from($contentEditable) : $contentEditable;
        $this->contentEditable = $contentEditable;
        $this->htmlElement->setAttribute('contenteditable', $contentEditable->value);
        return $this;
    }

    public function getContentEditable(): ?ContentEditableEnum
    {
        return $this->contentEditable;
    }

    /**
     * @todo sounds like enum
     * @description Specifies text direction (ltr, rtl, auto).
     */
    public function setDir(string|DirectionEnum $dir): static
    {
        if (is_string($dir) && ! in_array($dir, array_map(fn ($e) => $e->value, DirectionEnum::cases()))) {
            throw new InvalidArgumentException('Invalid value for dir');
        }

        $this->dir = is_string($dir) ? DirectionEnum::from($dir) : $dir;
        $this->htmlElement->setAttribute('dir', $this->dir->value);
        return $this;
    }

    public function getDir(): ?DirectionEnum
    {
        return $this->dir;
    }

    /**
     * @description Specifies whether an element is draggable (true, false).
     */
    public function setDraggable(bool|string $draggable = true): static
    {
        if (is_string($draggable) && in_array($draggable, ['true', 'false'])) {
            $draggable = $draggable === 'true' ? true : false;
        }
        $this->draggable = $draggable;
        $this->htmlElement->setAttribute('draggable', $draggable);
        return $this;
    }

    public function getDraggable(): ?bool
    {
        return $this->draggable;
    }

    /**
     * @description Hides the element from rendering.
     */
    public function setHidden(bool|string $hidden = true): static
    {
        $this->hidden = $hidden;
        $this->htmlElement->setAttribute('hidden', $hidden ? 'true' : 'false');
        return $this;
    }

    public function getHidden(): bool
    {
        return $this->hidden;
    }

    /**
     * @description Makes an element non-interactive (removes it from focus, clicks, etc.).
     */
    public function setInert(bool $inert): static
    {
        $this->inert = $inert;
        $this->htmlElement->setAttribute('inert', $inert ? 'true' : 'false');
        return $this;
    }

    public function getInert(): bool
    {
        return $this->inert;
    }

    /**
     * @description Suggests an input mode (e.g., numeric, email, tel).
     */
    public function setInputMode(string|InputModeEnum $inputMode = InputModeEnum::NUMERIC): static
    {
        if (is_string($inputMode) && ! in_array($inputMode, array_map(fn ($e) => $e->value, InputModeEnum::cases()))) {
            throw new InvalidArgumentException('Invalid value for inputMode');
        }
        $this->inputMode = is_string($inputMode) ? InputModeEnum::from($inputMode) : $inputMode;
        $this->htmlElement->setAttribute('inputmode', $this->inputMode->value);
        return $this;
    }

    public function getInputMode(): ?InputModeEnum
    {
        return $this->inputMode;
    }

    /**
     * @description Allows an element to be a custom built-in element (Web Components).
     */
    public function setIs(string $is): static
    {
        $this->is = $is;
        // $this->htmlElement->setAttribute('is', $is);
        return $this;
    }

    public function getIs(): ?string
    {
        return $this->is;
    }

    /**
     * @description Defines the language of the content (e.g., en, fr).
     */
    public function setLang(string $lang): static
    {
        $this->lang = $lang;
        // $this->htmlElement->setAttribute('lang', $lang);
        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    /**
     * @description Defines the language of the content (e.g., en, fr).
     */
    public function setNonce(string $nonce): static
    {
        $this->nonce = $nonce;
        // $this->htmlElement->setAttribute('nonce', $nonce);
        return $this;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
    }

    /**
     * @description Identifies the element as a part of a shadow DOM.
     */
    public function setPart(string $part): static
    {
        $this->part = $part;
        // $this->htmlElement->setAttribute('part', $part);
        return $this;
    }

    public function getPart(): ?string
    {
        return $this->part;
    }

    /**
     * @description Marks the element as a popover that can be triggered via JavaScript.
     */
    public function setPopover(string $popover): static
    {
        $this->popover = $popover;
        // $this->htmlElement->setAttribute('popover', $popover);
        return $this;
    }

    public function getPopover(): ?string
    {
        return $this->popover;
    }

    /**
     * @description Defines the ARIA role for accessibility.
     */
    public function setRole(string $role): static
    {
        $this->role = $role;
        // $this->htmlElement->setAttribute('role', $role);
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @description Assigns the element to a named slot in a shadow DOM.
     */
    public function setSlot(string $slot): static
    {
        $this->slot = $slot;
        // $this->htmlElement->setAttribute('slot', $slot);
        return $this;
    }

    public function getSlot(): ?string
    {
        return $this->slot;
    }

    /**
     * @description Specifies if spellchecking is enabled (true, false).
     */
    public function setSpellCheck(bool $spellCheck): static
    {
        $this->spellCheck = $spellCheck;
        // $this->htmlElement->setAttribute('spellcheck', $spellCheck ? 'true' : 'false');
        return $this;
    }

    public function getSpellCheck(): bool
    {
        return $this->spellCheck;
    }

    /**
     * @description Adds inline CSS styles to the element.
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        // $this->htmlElement->setAttribute('style', $style);
        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    /**
     * @description Sets the tab order for keyboard navigation.
     */
    public function setTabIndex(int $tabIndex): static
    {
        $this->tabIndex = $tabIndex;
        // $this->htmlElement->setAttribute('tabindex', (string)$tabIndex);
        return $this;
    }

    public function getTabIndex(): ?int
    {
        return $this->tabIndex;
    }

    /**
     * @description Provides tooltip text when hovered.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @description Specifies whether the content should be translated (yes, no).
     */
    public function setTranslate(string $translate): static
    {
        $this->translate = $translate;
        // $this->htmlElement->setAttribute('translate', $translate);
        return $this;
    }

    public function getTranslate(): ?string
    {
        return $this->translate;
    }

    /**
     * @description Sets a custom data attribute.
     */
    public function setDataAttribute(string $name, string $value): static
    {
        $this->dataAttributes[$name] = $value;
        // $this->htmlElement->setAttribute('data-' . $name, $value);
        return $this;
    }

    public function getDataAttribute(string $name): ?string
    {
        return $this->dataAttributes[$name] ?? null;
    }
}

<?php

namespace Html\Traits;

/**
 * properties that exist in HTMLElement, don't need to be declared here. __set and __get will handle them
 *  - for example className, id
 *
 * properties that are declared gloabbly here and additionaly in an HTML\Element class, will be set in the HTML\Element class
 *  - for example Anchor::$title
 */
trait GlobalAttributesTrait
{
    private ?string $accessKey = null;

    private ?string $autoCapitalize = null;

    private null|bool|string $contentEditable = null;

    private ?string $dir = null;

    private ?bool $draggable = null;

    private ?bool $hidden = null;

    private ?bool $inert = null;

    private ?string $inputMode = null;

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
        $this->id = $id; // calls __set
        // $this->htmlElement->setAttribute('id', $id); // not needed for properties that exist on HTMLElement
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
        $this->className = $className; // calls __set
        // $this->htmlElement->setAttribute('class', $className);
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
        $this->htmlElement->setAttribute('accesskey', $accessKey);
        return $this;
    }

    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }

    /**
     * @todo sounds like its an enum
     * none	No automatic capitalization.
     * sentences	Capitalizes the first letter of each sentence.
     * words	    Capitalizes the first letter of each word.
     * characters	Capitalizes every character (all uppercase).
     * @description Controls automatic capitalization for text input (none, sentences, words, characters).
     */
    public function setAutoCapitalize(string $autoCapitalize): static
    {
        $this->autoCapitalize = $autoCapitalize;
        $this->htmlElement->setAttribute('autocapitalize', $autoCapitalize);
        return $this;
    }

    public function getAutoCapitalize(): ?string
    {
        return $this->autoCapitalize;
    }

    /**
     * @todo sounds like an enum true/false/inherit
     * @description Defines whether the content is editable by the user.
     * ->setContentEditable() // true
     * ->setContentEditable(true) // true
     * ->setContentEditable('true') // false
     * ->setContentEditable(false) // false
     * ->setContentEditable('inherit') // inherit
     */
    public function setContentEditable(bool|string $contentEditable = true): static
    {
        $this->contentEditable = $contentEditable;
        $this->htmlElement->setAttribute('contenteditable', $contentEditable);
        return $this;
    }

    public function getContentEditable(): bool|string|null
    {
        return $this->contentEditable;
    }

    /**
     * @todo sounds like enum
     * @description Specifies text direction (ltr, rtl, auto).
     */
    public function setDir(string $dir): static
    {
        $this->dir = $dir;
        $this->htmlElement->setAttribute('dir', $dir);
        return $this;
    }

    public function getDir(): ?string
    {
        return $this->dir;
    }

    /**
     * @description Specifies whether an element is draggable (true, false).
     * @todo sounds like enum
     * ->setDraggable() // true
     * ->setDraggable(true) // true
     * ->setDraggable('true') // true
     * ->setDraggable(false) // false
     * ->setDraggable('false') // false
     */
    public function setDraggable(bool|string $draggable = true): static
    {
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
     * @todo sounds like enum
     * ->setInputMode() // numeric
     * ->setInputMode('numeric') // numeric
     * ->setInputMode('email') // email
     * ->setInputMode('tel') // tel
     * ->setInputMode('url') // url
     * ->setInputMode('search') // search
     * ->setInputMode('none') // none
     * ->setInputMode('text') // text
     * ->setInputMode('decimal') // decimal
     */
    public function setInputMode(string $inputMode): static
    {
        $this->inputMode = $inputMode;
        $this->htmlElement->setAttribute('inputmode', $inputMode);
        return $this;
    }

    public function getInputMode(): ?string
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

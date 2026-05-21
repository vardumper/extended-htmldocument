<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 11:39:20
 * @subpackage Html\Entity\Block
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
 */

namespace Html\Entity\Block;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;
use Html\Enum\DirectionEnum;
use Html\Enum\TranslateEnum;

/**
 * body entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'body')]
class BodyEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['html'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [
        'a',
        'abbr',
        'address',
        'area',
        'article',
        'aside',
        'audio',
        'b',
        'bdi',
        'bdo',
        'blockquote',
        'br',
        'button',
        'canvas',
        'cite',
        'code',
        'data',
        'datalist',
        'del',
        'details',
        'dfn',
        'dialog',
        'div',
        'dl',
        'em',
        'embed',
        'fieldset',
        'figure',
        'footer',
        'form',
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
        'header',
        'hr',
        'i',
        'iframe',
        'img',
        'input',
        'ins',
        'kbd',
        'label',
        'main',
        'map',
        'mark',
        'meter',
        'nav',
        'noscript',
        'object',
        'ol',
        'output',
        'p',
        'picture',
        'pre',
        'progress',
        'q',
        'ruby',
        's',
        'samp',
        'script',
        'section',
        'select',
        'small',
        'span',
        'strong',
        'sub',
        'sup',
        'table',
        'template',
        'textarea',
        'time',
        'u',
        'ul',
        'var',
        'video',
        'wbr',
    ];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $onafterprint = null,
        #[ORM\Fragment]
        protected ?string $onbeforeprint = null,
        #[ORM\Fragment]
        protected ?string $onbeforeunload = null,
        #[ORM\Fragment]
        protected ?string $onhashchange = null,
        #[ORM\Fragment]
        protected ?string $onlanguagechange = null,
        #[ORM\Fragment]
        protected ?string $onmessage = null,
        #[ORM\Fragment]
        protected ?string $onmessageerror = null,
        #[ORM\Fragment]
        protected ?string $onoffline = null,
        #[ORM\Fragment]
        protected ?string $ononline = null,
        #[ORM\Fragment]
        protected ?string $onpagehide = null,
        #[ORM\Fragment]
        protected ?string $onpageshow = null,
        #[ORM\Fragment]
        protected ?string $onpopstate = null,
        #[ORM\Fragment]
        protected ?string $onrejectionhandled = null,
        #[ORM\Fragment]
        protected ?string $onstorage = null,
        #[ORM\Fragment]
        protected ?string $onunhandledrejection = null,
        #[ORM\Fragment]
        protected ?string $onunload = null,
        #[ORM\Fragment]
        protected ?string $accesskey = null,
        #[ORM\Fragment]
        protected ?DirectionEnum $dir = null,
        #[ORM\Fragment]
        protected ?string $draggable = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $style = null,
        #[ORM\Fragment]
        protected ?string $tabindex = null,
        #[ORM\Fragment]
        protected ?string $title = null,
        #[ORM\Fragment]
        protected ?TranslateEnum $translate = null,
        ?string $entityId = null,
        ?DateTimeInterface $createdAt = null,
    ) {
        parent::__construct($entityId, $createdAt);
    }

    public function setClass(?string $value): static
    {
        $this->class = $value;
        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setOnafterprint(?string $value): static
    {
        $this->onafterprint = $value;
        return $this;
    }

    public function getOnafterprint(): ?string
    {
        return $this->onafterprint;
    }

    public function setOnbeforeprint(?string $value): static
    {
        $this->onbeforeprint = $value;
        return $this;
    }

    public function getOnbeforeprint(): ?string
    {
        return $this->onbeforeprint;
    }

    public function setOnbeforeunload(?string $value): static
    {
        $this->onbeforeunload = $value;
        return $this;
    }

    public function getOnbeforeunload(): ?string
    {
        return $this->onbeforeunload;
    }

    public function setOnhashchange(?string $value): static
    {
        $this->onhashchange = $value;
        return $this;
    }

    public function getOnhashchange(): ?string
    {
        return $this->onhashchange;
    }

    public function setOnlanguagechange(?string $value): static
    {
        $this->onlanguagechange = $value;
        return $this;
    }

    public function getOnlanguagechange(): ?string
    {
        return $this->onlanguagechange;
    }

    public function setOnmessage(?string $value): static
    {
        $this->onmessage = $value;
        return $this;
    }

    public function getOnmessage(): ?string
    {
        return $this->onmessage;
    }

    public function setOnmessageerror(?string $value): static
    {
        $this->onmessageerror = $value;
        return $this;
    }

    public function getOnmessageerror(): ?string
    {
        return $this->onmessageerror;
    }

    public function setOnoffline(?string $value): static
    {
        $this->onoffline = $value;
        return $this;
    }

    public function getOnoffline(): ?string
    {
        return $this->onoffline;
    }

    public function setOnonline(?string $value): static
    {
        $this->ononline = $value;
        return $this;
    }

    public function getOnonline(): ?string
    {
        return $this->ononline;
    }

    public function setOnpagehide(?string $value): static
    {
        $this->onpagehide = $value;
        return $this;
    }

    public function getOnpagehide(): ?string
    {
        return $this->onpagehide;
    }

    public function setOnpageshow(?string $value): static
    {
        $this->onpageshow = $value;
        return $this;
    }

    public function getOnpageshow(): ?string
    {
        return $this->onpageshow;
    }

    public function setOnpopstate(?string $value): static
    {
        $this->onpopstate = $value;
        return $this;
    }

    public function getOnpopstate(): ?string
    {
        return $this->onpopstate;
    }

    public function setOnrejectionhandled(?string $value): static
    {
        $this->onrejectionhandled = $value;
        return $this;
    }

    public function getOnrejectionhandled(): ?string
    {
        return $this->onrejectionhandled;
    }

    public function setOnstorage(?string $value): static
    {
        $this->onstorage = $value;
        return $this;
    }

    public function getOnstorage(): ?string
    {
        return $this->onstorage;
    }

    public function setOnunhandledrejection(?string $value): static
    {
        $this->onunhandledrejection = $value;
        return $this;
    }

    public function getOnunhandledrejection(): ?string
    {
        return $this->onunhandledrejection;
    }

    public function setOnunload(?string $value): static
    {
        $this->onunload = $value;
        return $this;
    }

    public function getOnunload(): ?string
    {
        return $this->onunload;
    }

    public function setAccesskey(?string $value): static
    {
        $this->accesskey = $value;
        return $this;
    }

    public function getAccesskey(): ?string
    {
        return $this->accesskey;
    }

    public function setDir(?DirectionEnum $value): static
    {
        $this->dir = $value;
        return $this;
    }

    public function getDir(): ?DirectionEnum
    {
        return $this->dir;
    }

    public function setDraggable(?string $value): static
    {
        $this->draggable = $value;
        return $this;
    }

    public function getDraggable(): ?string
    {
        return $this->draggable;
    }

    public function setHidden(?string $value): static
    {
        $this->hidden = $value;
        return $this;
    }

    public function getHidden(): ?string
    {
        return $this->hidden;
    }

    public function setLang(?string $value): static
    {
        $this->lang = $value;
        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setStyle(?string $value): static
    {
        $this->style = $value;
        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setTabindex(?string $value): static
    {
        $this->tabindex = $value;
        return $this;
    }

    public function getTabindex(): ?string
    {
        return $this->tabindex;
    }

    public function setTitle(?string $value): static
    {
        $this->title = $value;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTranslate(?TranslateEnum $value): static
    {
        $this->translate = $value;
        return $this;
    }

    public function getTranslate(): ?TranslateEnum
    {
        return $this->translate;
    }
}

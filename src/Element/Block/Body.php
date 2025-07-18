<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Abbreviation;
use Html\Element\Inline\Address;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\BidirectionalIsolation;
use Html\Element\Inline\BidirectionalOverride;
use Html\Element\Inline\Bold;
use Html\Element\Inline\Button;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Code;
use Html\Element\Inline\Data;
use Html\Element\Inline\Definition;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Image;
use Html\Element\Inline\Input;
use Html\Element\Inline\Italic;
use Html\Element\Inline\KeyboardInput;
use Html\Element\Inline\Label;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Meter;
use Html\Element\Inline\Output;
use Html\Element\Inline\Progress;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\Ruby;
use Html\Element\Inline\SampleOutput;
use Html\Element\Inline\Select;
use Html\Element\Inline\Small;
use Html\Element\Inline\Span;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Element\Inline\Subscript;
use Html\Element\Inline\Superscript;
use Html\Element\Inline\Textarea;
use Html\Element\Inline\Time;
use Html\Element\Inline\Underline;
use Html\Element\Inline\Variable;
use Html\Element\Void\Area;
use Html\Element\Void\BreakElement;
use Html\Element\Void\Script;
use Html\Element\Void\WordBreakOpportunity;
use Html\Mapping\Element;

#[Element('body')]
class Body extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'body';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = true;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [HTML::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Abbreviation::class,
        Address::class,
        Area::class,
        Article::class,
        Aside::class,
        Audio::class,
        Bold::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        Blockquote::class,
        BreakElement::class,
        Button::class,
        Canvas::class,
        Citation::class,
        Code::class,
        Data::class,
        DataList::class,
        DeletedText::class,
        Details::class,
        Definition::class,
        Dialog::class,
        Division::class,
        DefinitionList::class,
        Emphasis::class,
        Embed::class,
        Fieldset::class,
        Figure::class,
        Footer::class,
        Form::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
        Header::class,
        HorizontalRule::class,
        Italic::class,
        InlineFrame::class,
        Image::class,
        Input::class,
        InsertedText::class,
        KeyboardInput::class,
        Label::class,
        Main::class,
        Map::class,
        MarkedText::class,
        Meter::class,
        Navigation::class,
        NoScript::class,
        ObjectElement::class,
        OrderedList::class,
        Output::class,
        Paragraph::class,
        Picture::class,
        PreformattedText::class,
        Progress::class,
        Quotation::class,
        Ruby::class,
        Strikethrough::class,
        SampleOutput::class,
        Script::class,
        Section::class,
        Select::class,
        Small::class,
        Span::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Table::class,
        Template::class,
        Textarea::class,
        Time::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
        Video::class,
        WordBreakOpportunity::class,
    ];

    /**
     * Fires after the associated document has started printing or the print preview has been closed.
     */
    public ?string $onafterprint = null;

    /**
     * Fires before the associated document is printed or previewed for printing.
     */
    public ?string $onbeforeprint = null;

    /**
     * Fires before the user navigates away from the page.
     */
    public ?string $onbeforeunload = null;

    /**
     * Fires when the fragment identifier part of the URL changes.
     */
    public ?string $onhashchange = null;

    /**
     * Fires when the user changes the preferred language of the user interface.
     */
    public ?string $onlanguagechange = null;

    /**
     * Fires when a message is received from a different browsing context (e.g., an iframe).
     */
    public ?string $onmessage = null;

    /**
     * Fires when an error occurs while receiving a message from a different browsing context.
     */
    public ?string $onmessageerror = null;

    /**
     * Fires when the browser goes offline.
     */
    public ?string $onoffline = null;

    /**
     * Fires when the browser goes online.
     */
    public ?string $ononline = null;

    /**
     * Fires when the user navigates away from a page.
     */
    public ?string $onpagehide = null;

    /**
     * Fires when the user navigates to a page.
     */
    public ?string $onpageshow = null;

    /**
     * Fires when the user navigates through the history by clicking the browser's Back or Forward buttons.
     */
    public ?string $onpopstate = null;

    /**
     * Fires when a Promise is rejected and the rejection is handled by a Promise handler (e.g., catch).
     */
    public ?string $onrejectionhandled = null;

    /**
     * Fires when a storage area (e.g., localStorage or sessionStorage) changes.
     */
    public ?string $onstorage = null;

    /**
     * Fires when a Promise is rejected but there is no rejection handler (e.g., catch).
     */
    public ?string $onunhandledrejection = null;

    /**
     * Fires when the user is navigating away from the page (similar to onbeforeunload).
     */
    public ?string $onunload = null;

    public function setOnafterprint(string $onafterprint): static
    {
        $this->onafterprint = $onafterprint;
        $this->delegated->setAttribute('onafterprint', $onafterprint);
        return $this;
    }

    public function getOnafterprint(): ?string
    {
        return $this->onafterprint;
    }

    public function setOnbeforeprint(string $onbeforeprint): static
    {
        $this->onbeforeprint = $onbeforeprint;
        $this->delegated->setAttribute('onbeforeprint', $onbeforeprint);
        return $this;
    }

    public function getOnbeforeprint(): ?string
    {
        return $this->onbeforeprint;
    }

    public function setOnbeforeunload(string $onbeforeunload): static
    {
        $this->onbeforeunload = $onbeforeunload;
        $this->delegated->setAttribute('onbeforeunload', $onbeforeunload);
        return $this;
    }

    public function getOnbeforeunload(): ?string
    {
        return $this->onbeforeunload;
    }

    public function setOnhashchange(string $onhashchange): static
    {
        $this->onhashchange = $onhashchange;
        $this->delegated->setAttribute('onhashchange', $onhashchange);
        return $this;
    }

    public function getOnhashchange(): ?string
    {
        return $this->onhashchange;
    }

    public function setOnlanguagechange(string $onlanguagechange): static
    {
        $this->onlanguagechange = $onlanguagechange;
        $this->delegated->setAttribute('onlanguagechange', $onlanguagechange);
        return $this;
    }

    public function getOnlanguagechange(): ?string
    {
        return $this->onlanguagechange;
    }

    public function setOnmessage(string $onmessage): static
    {
        $this->onmessage = $onmessage;
        $this->delegated->setAttribute('onmessage', $onmessage);
        return $this;
    }

    public function getOnmessage(): ?string
    {
        return $this->onmessage;
    }

    public function setOnmessageerror(string $onmessageerror): static
    {
        $this->onmessageerror = $onmessageerror;
        $this->delegated->setAttribute('onmessageerror', $onmessageerror);
        return $this;
    }

    public function getOnmessageerror(): ?string
    {
        return $this->onmessageerror;
    }

    public function setOnoffline(string $onoffline): static
    {
        $this->onoffline = $onoffline;
        $this->delegated->setAttribute('onoffline', $onoffline);
        return $this;
    }

    public function getOnoffline(): ?string
    {
        return $this->onoffline;
    }

    public function setOnonline(string $ononline): static
    {
        $this->ononline = $ononline;
        $this->delegated->setAttribute('ononline', $ononline);
        return $this;
    }

    public function getOnonline(): ?string
    {
        return $this->ononline;
    }

    public function setOnpagehide(string $onpagehide): static
    {
        $this->onpagehide = $onpagehide;
        $this->delegated->setAttribute('onpagehide', $onpagehide);
        return $this;
    }

    public function getOnpagehide(): ?string
    {
        return $this->onpagehide;
    }

    public function setOnpageshow(string $onpageshow): static
    {
        $this->onpageshow = $onpageshow;
        $this->delegated->setAttribute('onpageshow', $onpageshow);
        return $this;
    }

    public function getOnpageshow(): ?string
    {
        return $this->onpageshow;
    }

    public function setOnpopstate(string $onpopstate): static
    {
        $this->onpopstate = $onpopstate;
        $this->delegated->setAttribute('onpopstate', $onpopstate);
        return $this;
    }

    public function getOnpopstate(): ?string
    {
        return $this->onpopstate;
    }

    public function setOnrejectionhandled(string $onrejectionhandled): static
    {
        $this->onrejectionhandled = $onrejectionhandled;
        $this->delegated->setAttribute('onrejectionhandled', $onrejectionhandled);
        return $this;
    }

    public function getOnrejectionhandled(): ?string
    {
        return $this->onrejectionhandled;
    }

    public function setOnstorage(string $onstorage): static
    {
        $this->onstorage = $onstorage;
        $this->delegated->setAttribute('onstorage', $onstorage);
        return $this;
    }

    public function getOnstorage(): ?string
    {
        return $this->onstorage;
    }

    public function setOnunhandledrejection(string $onunhandledrejection): static
    {
        $this->onunhandledrejection = $onunhandledrejection;
        $this->delegated->setAttribute('onunhandledrejection', $onunhandledrejection);
        return $this;
    }

    public function getOnunhandledrejection(): ?string
    {
        return $this->onunhandledrejection;
    }

    public function setOnunload(string $onunload): static
    {
        $this->onunload = $onunload;
        $this->delegated->setAttribute('onunload', $onunload);
        return $this;
    }

    public function getOnunload(): ?string
    {
        return $this->onunload;
    }
}

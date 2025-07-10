<?php

declare(strict_types=1);

namespace Html\Delegator;

use DOM\Text;

/**
 * TextDelegator wraps DOM\Text nodes
 */
class TextDelegator extends DOMNodeDelegator
{
    public static HTMLDocumentDelegator $ownerDocument;

    public function __construct(
        public readonly Text $text
    ) {
        parent::__construct($text);
    }

    public static function setOwnerDocument(HTMLDocumentDelegator $document): void
    {
        static::$ownerDocument = $document;
    }

    public static function getOwnerDocument(): HTMLDocumentDelegator
    {
        return static::$ownerDocument;
    }
}
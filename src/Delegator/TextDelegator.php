<?php

namespace Html\Delegator;

use AllowDynamicProperties;
use DOM\Text;
use Html\Interface\TextDelegatorInterface;
use Html\Trait\DelegatorTrait;

#[AllowDynamicProperties]
class TextDelegator implements TextDelegatorInterface
{
    use DelegatorTrait;

    public static HTMLDocumentDelegator $ownerDocument;

    /**
     * @property-read string $data
     * @property-read int $length
     * @property-read string $wholeText
     * @property-read ?Text $nextSibling
     * @property-read ?Text $previousSibling
     * @property Text $delegated
     */
    public function __construct(
        private readonly Text $delegated
    ) {
    }

    public function getText(): Text
    {
        return $this->delegated;
    }

    public static function getOwnerDocument(): HTMLDocumentDelegator
    {
        return static::$ownerDocument;
    }
}

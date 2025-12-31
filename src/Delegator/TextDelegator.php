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

    public function getOwnerDocument(): HTMLDocumentDelegator
    {
        $owner = $this->delegated->ownerDocument;
        if (! $owner instanceof \DOM\HTMLDocument) {
            throw new \RuntimeException('No owner document available for this text node.');
        }
        return HTMLDocumentDelegator::getInstance($owner);
    }
}

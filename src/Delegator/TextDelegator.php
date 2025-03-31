<?php

namespace Html\Delegator;

use DOM\Text;
use Html\Interface\TextDelegatorInterface;
use Html\Trait\DelegatorTrait;

class TextDelegator implements TextDelegatorInterface
{
    use DelegatorTrait;

    public function __construct(
        private readonly Text $delegated
    ) {
    }

    public function getText(): Text
    {
        return $this->delegated;
    }
}

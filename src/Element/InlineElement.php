<?php

namespace Html\Element;

use Html\Delegator\HTMLElementDelegator;

abstract class InlineElement extends HTMLElementDelegator
{
    public const string QUALIFIED_NAME = self::QUALIFIED_NAME; // Self-referential 'abstract' declaration

    public const bool STYLABLE = true;

    public const bool INLINE = true;

    public const bool BLOCK = false;

    public const bool VOID = false;

    // public const string SELF_CLOSING = self::SELF_CLOSING; // updated based on determination
}

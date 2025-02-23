<?php

namespace Html\Element;

use Html\Delegator\HTMLElementDelegator;

abstract class BlockElement extends HTMLElementDelegator
{
    public const string QUALIFIED_NAME = self::QUALIFIED_NAME; // Self-referential 'abstract' declaration

    public const bool STYLABLE = true;

    public const bool INLINE = false;

    public const bool BLOCK = true;

    public const bool VOID = false;

    // public const bool SELF_CLOSING = false; // updated based on determination
}

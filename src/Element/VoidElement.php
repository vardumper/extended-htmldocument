<?php

namespace Html\Element;

use Html\Delegator\HTMLElementDelegator;

abstract class VoidElement extends HTMLElementDelegator
{
    public const STYLABLE = false;

    public const INLINE = false;

    public const BLOCK = false;

    public const VOID = true;

    public const SELF_CLOSING = false;
}

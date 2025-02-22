<?php
namespace Html\Element;

use Html\Delegator\HTMLElementDelegator;

class InlineElement extends HTMLElementDelegator
{
    public CONST STYLABLE = true;
    public CONST INLINE = true;
    public CONST BLOCK = false;
    public CONST VOID = false;
    public CONST SELF_CLOSING = false; // updated based on determination
}

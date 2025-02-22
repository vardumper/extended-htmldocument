<?php
namespace Html\Element;

use Html\Delegator\HTMLElementDelegator;

class VoidElement extends HTMLElementDelegator
{
    public CONST STYLABLE = false;
    public CONST INLINE = false;
    public CONST BLOCK = false;
    public CONST VOID = true;
    public CONST SELF_CLOSING = false;
}

<?php
namespace Html\Model;

use DOM\HtmlElement;
use Html\Delegator\HTMLElementDelegator;

class BlockElement extends HTMLElementDelegator
{
    public CONST STYLABLE = true;
    public CONST INLINE = false;
    public CONST BLOCK = true;
    public CONST VOID = false;
    public CONST SELF_CLOSING = false; // updated based on determination
}

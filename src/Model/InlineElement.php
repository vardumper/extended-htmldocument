<?php
namespace Html\Model;

use DOM\HtmlElement;

class InlineElement extends ExtendedHTMLElement
{
    public CONST STYLABLE = true;
    public CONST INLINE = true;
    public CONST BLOCK = false;
    public CONST VOID = false;
    public CONST SELF_CLOSING = false; // updated based on determination
}
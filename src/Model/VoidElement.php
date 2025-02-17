<?php
namespace Html\Model;

use DOM\HtmlElement;

class VoidElement extends ExtendedHTMLElement
{
    public CONST STYLABLE = false;
    public CONST INLINE = false;
    public CONST BLOCK = false;
    public CONST VOID = true;
    public CONST SELF_CLOSING = true;
}
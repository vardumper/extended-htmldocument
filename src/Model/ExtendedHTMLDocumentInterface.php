<?php 
declare(strict_types=1);
namespace Html\Model;

use Dom\HTMLDocument;

interface ExtendedHTMLDocumentInterface {
    public function __construct(HTMLDocument $htmlDocument);
    // public static function createEmpty(): self;
}
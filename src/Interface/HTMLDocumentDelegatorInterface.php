<?php
declare(strict_types=1);
namespace Html\Interface;

use Dom\HTMLDocument;

interface HTMLDocumentDelegatorInterface {
    public function __construct(HTMLDocument $htmlDocument);
    // public static function createEmpty(): self;
}

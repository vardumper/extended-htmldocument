<?php

declare(strict_types=1);

namespace Html\Helper;

use DOM\HTMLDocument;

final class DomHelper
{
    public function createEmpty(): HTMLDocument
    {
        return HTMLDocument::createEmpty();
    }

    public function createFromString(string $html): HTMLDocument
    {
        return HTMLDocument::createFromString($html);
    }

    public function createFromFile(string $path): HTMLDocument
    {
        return HTMLDocument::createFromFile($path);
    }
}

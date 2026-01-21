<?php

declare(strict_types=1);

namespace Html\Helper;

use DOM\HTMLDocument;

final class DomHelper
{
    public function createEmpty(string $encoding = 'UTF-8'): HTMLDocument
    {
        return HTMLDocument::createEmpty($encoding);
    }

    public function createFromString(string $html, int $options = 0, ?string $overrideEncoding = null): HTMLDocument
    {
        return HTMLDocument::createFromString($html, $options, $overrideEncoding);
    }

    public function createFromFile(string $path, int $options = 0, ?string $overrideEncoding = null): HTMLDocument
    {
        return HTMLDocument::createFromFile($path, $options, $overrideEncoding);
    }
}

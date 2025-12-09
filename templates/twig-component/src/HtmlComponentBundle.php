<?php

namespace Html\ComponentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * HTML Component Bundle
 *
 * Provides Symfony UX Twig Components for all HTML5 elements with ARIA support.
 */
class HtmlComponentBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}

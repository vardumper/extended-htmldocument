<?php

namespace Tests\Trait;

use Html\Trait\NativePropertiesTrait;

class TestNativeProperties
{
    use NativePropertiesTrait;

    // define properties that trait expects to exist
    public ?string $textContent = null;

    public string $innerHTML = '';

    public string $nodeValue = '';

    public string $substitutedNodeValue = '';
}

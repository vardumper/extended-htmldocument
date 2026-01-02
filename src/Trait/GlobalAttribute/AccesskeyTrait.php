<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait AccesskeyTrait
{
    /**
     * specifies a shortcut key (or keys) to activate or focus an element
     */
    public ?string $accesskey = null;

    /**
     * @description Specifies a keyboard shortcut to focus or activate an element.
     */
    public function setAccessKey(string $accesskey): static
    {
        $this->accesskey = $accesskey;
        $this->delegated->setAttribute('accesskey', $accesskey);
        return $this;
    }

    public function getAccessKey(): ?string
    {
        return $this->accesskey;
    }
}

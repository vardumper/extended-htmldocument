<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

// @phpstan-ignore-next-line - trait may be used dynamically by code generation
trait PartTrait
{
    /**
     * Represents a specific purpose or role for the element, typically for styling or functionality
     */
    public ?string $part = null;

    /**
     * @description Identifies the element as a part of a shadow DOM.
     */
    public function setPart(string $part): static
    {
        $this->part = $part;
        // $this->delegated->setAttribute('part', $part);
        return $this;
    }

    public function getPart(): ?string
    {
        return $this->part;
    }
}

<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait DraggableTrait
{
    /**
     * Indicates whether the element is draggable
     */
    public ?bool $draggable = null;

    /**
     * @description Specifies whether an element is draggable (true, false).
     */
    public function setDraggable(bool|string $draggable = true): static
    {
        if (is_string($draggable) && in_array($draggable, ['true', 'false'])) {
            $draggable = $draggable === 'true' ? true : false;
        }
        if ($draggable) {
            $this->draggable = $draggable;
            $this->setAttribute('draggable', $draggable);
            $this->delegated->setAttribute('draggable', $draggable);
        }
        return $this;
    }

    public function getDraggable(): ?bool
    {
        return $this->draggable;
    }
}

<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait TitleTrait
{
    /**
     * Represents a title or tooltip for the element
     */
    public ?string $title = null;

    /**
     * @description Provides tooltip text when hovered.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}

<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait DataTrait
{
    /**
     * Represents custom data attributes on the element
     */
    public ?array $dataAttributes = null;

    /**
     * @description Sets a custom data attribute.
     */
    public function setDataAttribute(array $data): static
    {
        $this->dataAttributes = $data;
        foreach ($data as $name => $value) {
            $this->delegated->setAttribute('data-' . $name, $value);
        }
        return $this;
    }

    public function getDataAttribute(?string $name = null): null|string|array
    {
        if ($name === null) {
            return $this->dataAttributes;
        }

        if (! isset($this->dataAttributes[$name])) {
            return null;
        }

        return $this->dataAttributes[$name];
    }
}

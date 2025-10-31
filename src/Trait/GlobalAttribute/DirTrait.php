<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

use Html\Enum\DirectionEnum;
use InvalidArgumentException;

trait DirTrait
{
    /**
     * Represents the text direction of the element
     */
    private ?DirectionEnum $dir = null;

    /**
     * @todo sounds like enum
     * @description Specifies text direction (ltr, rtl, auto).
     */
    public function setDir(string|DirectionEnum $dir): static
    {
        if (is_string($dir) && ! in_array($dir, array_map(fn($e) => $e->value, DirectionEnum::cases()))) {
            throw new InvalidArgumentException('Invalid value for dir');
        }

        $this->dir = is_string($dir) ? DirectionEnum::from($dir) : $dir;
        $this->delegated->setAttribute(DirectionEnum::getQualifiedName(), $this->dir->value);
        return $this;
    }

    public function getDir(): ?DirectionEnum
    {
        return $this->dir;
    }
}

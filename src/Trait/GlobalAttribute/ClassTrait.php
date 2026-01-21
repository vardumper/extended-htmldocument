<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

use BackedEnum;
use UnitEnum;

/**
 * ClassName property not declared here, as it's part of PHPs HTMLElement class
 */
trait ClassTrait
{
    /**
     * @description Assigns CSS class names to an element.
     */
    public function setClass(string|array|UnitEnum $className): static
    {
        if ($className instanceof UnitEnum) {
            $className = $className instanceof BackedEnum ? $className->value : $className->name;
        }

        // cast to string
        if (is_array($className)) {
            /** @todo be more permissive here? or stricter (as is) for max css compatbility */
            $className = array_map(function ($value): ?string {
                if ($value instanceof UnitEnum) {
                    return $value instanceof BackedEnum ? (string) $value->value : (string) $value->name;
                }
                if (is_scalar($value) || (is_object($value) && method_exists($value, '__toString'))) {
                    return (string) $value;
                }
                return null;
            }, $className);
            $className = array_filter(
                $className,
                static fn ($v) => $v !== null && trim($v) !== ''
            ); // remove empty values

            foreach ($className as &$name) {
                // sanitize individual class name and normalize whitespace
                $name = preg_replace('/[^a-zA-Z0-9_-]+/', ' ', (string) $name);
                $name = preg_replace('/\s+/', ' ', (string) $name);
                $name = trim((string) $name);
            }
            $className = implode(' ', $className);
        }

        // not empty? set it
        if (! empty($className)) {
            $this->className = $className;
            $this->delegated->className = $className;
        }
        return $this;
    }

    public function getClass(): ?string
    {
        return $this->className;
    }

    /**
     * alias
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }

    /**
     * alias
     */
    public function setClassName(string|array|UnitEnum $className): static
    {
        return $this->setClass($className);
    }

    /**
     * alias
     */
    public function getClasses(): ?string
    {
        return $this->className;
    }

    /**
     * alias
     */
    public function setClasses(string|array|UnitEnum $className): static
    {
        return $this->setClass($className);
    }
}

<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

/**
 * ClassName property not declared here, as it's part of PHPs HTMLElement class
 */
trait ClassTrait
{
    /**
     * @description Assigns CSS class names to an element.
     */
    public function setClass(string|array $className): static
    {
        // cast to string
        if (is_array($className)) {
            /** @todo be more permissive here? or stricter (as is) for max css compatbility */
            $className = array_filter($className, 'strlen'); // remove empty values
            foreach ($className as &$name) {
                $name = preg_replace('/[^a-zA-Z0-9_-]+/', '', $name);
                $className = preg_replace('/[^a-zA-Z0-9_-]+/', ' ', $className);
                $className = preg_replace('/\s+/', ' ', $className);
                $className = trim($className);
            }
            $className = implode(' ', $className);
        }

        // not empty? set it
        if (is_string($className) && ! empty($className)) {
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
    public function setClassName(string|array $className): static
    {
        return $this->setClass($className);
    }
}

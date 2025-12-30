<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait AlpineJsTrait
{
    /**
     * Represents Alpine.js attributes on the element
     */
    public ?array $alpineAttributes = null;

    /**
     * Sets Alpine.js attributes with support for shortcuts.
     * 
     * Shortcuts:
     * - @event -> x-on:event
     * - :attribute -> x-bind:attribute
     * - .modifier -> x-model.modifier (for x-model)
     * - directive -> x-directive (for standard directives like show, text, if, etc.)
     */
    public function setAlpineAttribute(string $name, mixed $value): static
    {
        $translatedName = $this->translateAlpineAttribute($name);
        $this->validateAlpineDirective($translatedName);
        $this->alpineAttributes[$name] = $value;
        $this->setAttribute($translatedName, $value);
        return $this;
    }

    /**
     * Sets multiple Alpine.js attributes at once.
     */
    public function setAlpineAttributes(array $attributes): static
    {
        foreach ($attributes as $name => $value) {
            $this->setAlpineAttribute($name, $value);
        }
        return $this;
    }

    /**
     * Gets an Alpine.js attribute value.
     */
    public function getAlpineAttribute(string $name): mixed
    {
        return $this->alpineAttributes[$name] ?? null;
    }

    /**
     * Gets all Alpine.js attributes.
     */
    public function getAlpineAttributes(): ?array
    {
        return $this->alpineAttributes;
    }

    /**
     * Translates Alpine.js shortcut to full attribute name.
     */
    private function translateAlpineAttribute(string $name): string
    {
        if (str_starts_with($name, '@')) {
            // @click -> x-on:click
            return 'x-on:' . substr($name, 1);
        } elseif (str_starts_with($name, ':')) {
            // :class -> x-bind:class
            return 'x-bind:' . substr($name, 1);
        } elseif (str_starts_with($name, '.')) {
            // .lazy -> x-model.lazy
            return 'x-model' . $name;
        } elseif (in_array($name, ['show', 'text', 'html', 'if', 'for', 'cloak', 'init', 'data', 'effect', 'ignore', 'ref', 'transition', 'teleport'])) {
            // Standard directives
            return 'x-' . $name;
        } else {
            // Assume it's already a full x-* attribute or custom
            if (!str_starts_with($name, 'x-')) {
                return 'x-' . $name;
            }
            return $name;
        }
    }

    /**
     * Validates that the Alpine directive is allowed on this element.
     */
    private function validateAlpineDirective(string $translatedName): void
    {
        $elementName = static::QUALIFIED_NAME;

        if (in_array($translatedName, ['x-if', 'x-for'])) {
            if ($elementName !== 'template') {
                throw new \InvalidArgumentException(
                    "Alpine directive '{$translatedName}' is only allowed on <template> elements, not on <{$elementName}>."
                );
            }
        }

        // Additional validations can be added here for other directives if needed
        // For example, x-model on non-form elements could issue a warning, but for now, allow it
    }

    /**
     * Render the element as HTML string, converting Alpine.js full attribute names back to shorthand. Quite optional or opinionated.
     */
    public function __toString(): string
    {
        // Get the default HTML rendering
        $html = parent::__toString();

        // Replace full Alpine.js attribute names back to shorthand
        $html = str_replace(' x-on:', ' @', $html);
        $html = str_replace(' x-bind:', ' :', $html);

        return $html;
    }
}

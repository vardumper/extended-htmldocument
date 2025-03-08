<?php

namespace Html\Trait;

/**
 * properties that exist in HTMLElement, don't need to be declared here. __set and __get will handle them
 *  - for example className, id
 *
 * properties that are declared gloabbly here and additionaly in an HTML\Element class, will be set in the HTML\Element class
 *  - for example Anchor::$title
 */
trait NativePropertiesTrait
{
    /**
     * @description Sets the value the HTML element.
     */
    public function setTextContent(string $value): static
    {
        $this->textContent = $value;
        return $this;
    }

    public function getTextContent(): ?string
    {
        return $this->textContent;
    }

    public function getInnerHTML(): string
    {
        return $this->innerHTML;
    }

    public function setInnerHTML(string $innerHTML): static
    {
        $this->innerHTML = $innerHTML;
        return $this;
    }

    public function getOuterHTML(): string
    {
        return $this->outerHTML;
    }

    public function setOuterHTML(string $outerHTML): static
    {
        $this->outerHTML = $outerHTML;
        return $this;
    }

    public function getSubstitutedNodeValue(): string
    {
        return $this->substitutedNodeValue;
    }

    public function setSubstitutedNodeValue(string $substitutedNodeValue): static
    {
        $this->substitutedNodeValue = $substitutedNodeValue;
        return $this;
    }
}

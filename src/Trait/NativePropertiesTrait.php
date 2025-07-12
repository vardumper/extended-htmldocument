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

    /**
     * @description get the inner html of the element, can be a string or HTML string
     */
    public function getInnerHTML(): string
    {
        return $this->innerHTML;
    }

    /**
     * @description set the inner html of the element, can be a string or HTML string
     */
    public function setInnerHTML(string $innerHTML): static
    {
        $this->innerHTML = $innerHTML;
        return $this;
    }

    /**
     * @description get the inner html of the element, can be a string or HTML string
     */
    public function getNodeValue(): string
    {
        return $this->nodeValue;
    }

    /**
     * @description set the inner html of the element, can be a string or HTML string
     */
    public function setNodeValue(string $nodeValue): static
    {
        $this->nodeValue = $nodeValue;
        return $this;
    }

    /**
     * access seems restricted, at least in body element *
     */
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

<?php
declare(strict_types=1);

namespace Html\Delegator;

use DOM\HTMLDocument;
use Html\Interface\HTMLDocumentDelegatorInterface;

class HTMLDocumentDelegator implements HTMLDocumentDelegatorInterface {
    public function __construct(public readonly HTMLDocument $htmlDocument) {
    }

    public static function createEmpty(): self
    {
        return new self(HTMLDocument::createEmpty());
    }

    public static function createFromString(string $html): self
    {
        return new self(HTMLDocument::createFromString($html));
    }

    public static function createFromFile(string $path): self
    {
        return new self(HTMLDocument::createFromFile($path));
    }

    public function __call($name, $arguments)
    {
        // Convert any HTMLElementDelegator arguments to their underlying DOM\HtmlElement (eg. appendChild)
        foreach ($arguments as &$argument) {
            if ($argument instanceof HTMLElementDelegator) {
                $argument = $argument->htmlElement;
            }
        }
// var_dump($arguments);
        $reflection = new \ReflectionClass($this->htmlDocument);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->htmlDocument, $arguments);
        }
        throw new \BadMethodCallException("Method $name does not exist on " . $reflection->getName() . ". However you can implement it on " . __CLASS__);
    }

    // public function appendChild(HTMLElementDelegator $child): void {
    //     $this->htmlDocument->appendChild($child->htmlElement);
    // }

    public function __get($name)
    {
        $reflection = new \ReflectionClass($this->htmlDocument);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlDocument);
        }
        throw new \InvalidArgumentException("Property $name does not exist on " . $reflection->getName() . ". However you cna implement it on " . __CLASS__);
    }

    public function __set($name, $value) : void
    {
        $reflection = new \ReflectionClass($this->htmlDocument);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->htmlDocument, $value);
            return;
        }
        throw new \InvalidArgumentException("Property $name does not exist on " . $reflection->getName() . ". However you can implement it on " . __CLASS__);
    }

    public function createElement(string $qualifiedName): HTMLElementDelegator {
        $htmlElement = $this->htmlDocument->createElement($qualifiedName);
        return new HTMLElementDelegator($htmlElement);
    }

    public function getElementsByTagName(string $name): DOMNodeListDelegator {
        $nodeList = $this->htmlDocument->getElementsByTagName($name);
        return new DOMNodeListDelegator($nodeList);
    }

    public function __toString(): string {
        return $this->htmlDocument->saveHtml();
    }
}

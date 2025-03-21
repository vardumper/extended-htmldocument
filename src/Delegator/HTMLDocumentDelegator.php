<?php

declare(strict_types=1);

namespace Html\Delegator;

use BadMethodCallException;
use DOM\HTMLDocument;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\HTMLGenerator;
use InvalidArgumentException;
use ReflectionClass;

/**
 * inherited properties
 *
 * @property-read \DOM\Implementation $implementation
 * @property string $URL
 * @property string $documentURI
 * @property string $characterSet
 * @property string $charset
 * @property string $inputEncoding
 * @property-read ?\DOM\DocumentType $doctype
 * @property-read ?\DOM\Element $documentElement
 * @property-read ?\DOM\Element $firstElementChild
 * @property-read ?\DOM\Element $lastElementChild
 * @property-read int $childElementCount
 * @property ?\DOM\HTMLElement $body
 * @property-read ?\DOM\HTMLElement $head
 * @property string $title
 * @property-read int $nodeType
 * @property-read string $nodeName
 * @property-read string $baseURI
 * @property-read bool $isConnected
 * @property-read ?\DOM\Document $ownerDocument
 * @property-read ?\DOM\Node $parentNode
 * @property-read ?\DOM\Element $parentElement
 * @property-read \DOM\NodeList $childNodes
 * @property-read ?\DOM\Node $firstChild
 * @property-read ?\DOM\Node $lastChild
 * @property-read ?\DOM\Node $previousSibling
 * @property-read ?\DOM\Node $nextSibling
 * @property ?string $nodeValue
 * @property ?string $textContent
 *
 * inherited methods
 * @method string saveXml()
 * @method string saveHtml()
 * @method int debugGetTemplateCount()
 * @method HTMLElementDelegator createElement(string $qualifiedName)
 * @method DOMNodeListDelegator getElementsByTagName(string $name)
 */
class HTMLDocumentDelegator implements HTMLDocumentDelegatorInterface
{
    public function __construct(
        public readonly HTMLDocument $htmlDocument,
        public ?TemplateGeneratorInterface $renderer = null
    ) {
        if ($renderer === null) {
            $this->renderer = new HTMLGenerator();
        }
    }

    public function __call($name, $arguments)
    {
        // Convert any HTMLElementDelegator arguments to their underlying DOM\HtmlElement (eg. appendChild)
        foreach ($arguments as &$argument) {
            if ($argument instanceof HTMLElementDelegator) {
                $argument = $argument->htmlElement;
            }
        }

        $reflection = new ReflectionClass($this->htmlDocument);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->htmlDocument, $arguments);
        }

        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __get($name)
    {
        $reflection = new ReflectionClass($this->htmlDocument);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlDocument);
        }

        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        $reflection = new ReflectionClass($this->htmlDocument);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->htmlDocument, $value);
            return;
        }

        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __toString(): string
    {
        return $this->htmlDocument->saveHtml();
    }

    public function setRenderer(TemplateGeneratorInterface $renderer): void
    {
        $this->renderer = $renderer;
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

    public function createElement(string $qualifiedName): HTMLElementDelegator
    {
        $htmlElement = $this->htmlDocument->createElement($qualifiedName);
        return new HTMLElementDelegator($htmlElement);
    }

    public function getElementsByTagName(string $name): DOMNodeListDelegator
    {
        $nodeList = $this->htmlDocument->getElementsByTagName($name);
        return new DOMNodeListDelegator($nodeList);
    }
}

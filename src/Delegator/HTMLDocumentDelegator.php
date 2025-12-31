<?php

declare(strict_types=1);

namespace Html\Delegator;

use AllowDynamicProperties;
use DOM\HTMLDocument;
use Html\Helper\DomHelper;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\HTMLGenerator;
use Html\Trait\ClassResolverTrait;
use Html\Trait\DelegatorTrait;
use InvalidArgumentException;

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
 * @property HTMLDocument $delegated
 *
 * inherited methods
 * @method string saveXml()
 * @method string saveHtml()
 * @method int debugGetTemplateCount()
 * @method HTMLElementDelegator createElement(string $qualifiedName)
 * @method NodeListDelegator getElementsByTagName(string $name)
 */

#[AllowDynamicProperties]
class HTMLDocumentDelegator implements HTMLDocumentDelegatorInterface
{
    use DelegatorTrait;
    use ClassResolverTrait;

    public bool $formatOutput;

    /**
     * @var array<string, self>
     */
    private static array $instances = [];

    public function __construct(
        public readonly HTMLDocument $delegated,
        public ?TemplateGeneratorInterface $renderer = null
    ) {
        if ($renderer !== null && ! $renderer->canRenderElements()) {
            throw new InvalidArgumentException('The given renderer cannot render elements.');
        }
        if ($renderer === null) {
            $this->renderer = new HTMLGenerator();
        }
        self::$instances[spl_object_hash($this->delegated)] = $this;
    }

    public function __toString(): string
    {
        return $this->renderer->render($this);
    }

    public function setRenderer(TemplateGeneratorInterface $renderer): void
    {
        $this->renderer = $renderer;
    }

    public static function getInstance(HTMLDocument $document): self
    {
        $key = spl_object_hash($document);
        return self::$instances[$key] ?? new self($document);
    }

    public static function createEmpty(): self
    {
        return new self((new DomHelper())->createEmpty());
    }

    public static function createFromString(string $html): self
    {
        return new self((new DomHelper())->createFromString($html));
    }

    public static function createFromFile(string $path): self
    {
        return new self((new DomHelper())->createFromFile($path));
    }

    public function createElement(string $qualifiedName, ?string $nodeValue = null): HTMLElementDelegator
    {
        $htmlElement = $this->delegated->createElement($qualifiedName);
        if ($nodeValue !== null) {
            $htmlElement->append($nodeValue);
        }
        \Html\Delegator\HTMLElementDelegator::$ownerDocument = $this;
        return new HTMLElementDelegator($htmlElement);
    }

    public function appendChild(HTMLElementDelegator $child): void
    {
        if ($this->delegated->documentElement === null) {
            $this->delegated->appendChild($this->delegated->createElement('html'));
        }
        $this->delegated->documentElement->appendChild($child->delegated);
    }

    public function createTextNode(string $nodeValue): TextDelegator
    {
        $textNode = $this->delegated->createTextNode($nodeValue);
        \Html\Delegator\TextDelegator::$ownerDocument = $this;
        return new TextDelegator($textNode);
    }

    public function getElementsByTagName(string $name): NodeListDelegator
    {
        $nodeList = $this->delegated->getElementsByTagName($name);
        return new NodeListDelegator($nodeList);
    }

    public function querySelector(string $selectors): ?HTMLElementDelegator
    {
        $element = $this->delegated->querySelector($selectors);
        if ($element === null) {
            return null;
        }
        return $this->getDelegatorFromElement($element);
    }

    public function querySelectorAll(string $selectors): ?NodeListDelegator
    {
        $nodeList = $this->delegated->querySelectorAll($selectors);
        if ($nodeList === null) {
            return null;
        }
        return new NodeListDelegator($nodeList);
    }

    public function removeChild(HTMLElementDelegator $child): void
    {
        if ($this->delegated->documentElement !== null) {
            $this->delegated->documentElement->removeChild($child->delegated);
        }
    }
}

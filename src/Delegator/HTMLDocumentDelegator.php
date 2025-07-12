<?php

declare(strict_types=1);

namespace Html\Delegator;

use AllowDynamicProperties;
use DOM\HTMLDocument;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\HTMLGenerator;
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

    public bool $formatOutput;

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
    }

    public function __toString(): string
    {
        return $this->renderer->render($this);
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

    public function createElement(string $qualifiedName, ?string $nodeValue = null): HTMLElementDelegator
    {
        $htmlElement = $this->delegated->createElement($qualifiedName);
        if ($nodeValue !== null) {
            $htmlElement->append($nodeValue);
        }
        return new HTMLElementDelegator($htmlElement);
    }

    public function createTextNode(string $nodeValue): TextDelegator
    {
        $textNode = $this->delegated->createTextNode($nodeValue);
        return new TextDelegator($textNode);
    }

    public function getElementsByTagName(string $name): NodeListDelegator
    {
        $nodeList = $this->delegated->getElementsByTagName($name);
        return new NodeListDelegator($nodeList);
    }
}

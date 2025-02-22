<?php

declare(strict_types=1);

namespace Html\Interface;

use Dom\HTMLDocument;
use Html\Delegator\DOMNodeListDelegator;
use Html\Delegator\HTMLElementDelegator;

interface HTMLDocumentDelegatorInterface
{
    public function __construct(HTMLDocument $htmlDocument);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value);

    public function __toString(): string;

    public static function createEmpty(): self;

    public function createElement(string $qualifiedName): HTMLElementDelegator;

    public function getElementsByTagName(string $name): DOMNodeListDelegator;
}

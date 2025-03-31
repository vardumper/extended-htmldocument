<?php

declare(strict_types=1);

namespace Html\Interface;

use Dom\HTMLDocument;
use Html\Delegator\HTMLElementDelegator;
use Html\Delegator\NodeListDelegator;

/**
 * @property HTMLDocument $delegated
 */
interface HTMLDocumentDelegatorInterface
{
    public function __construct(HTMLDocument $delegated);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value);

    public function __toString(): string;

    public static function createEmpty(): self;

    public function createElement(string $qualifiedName): HTMLElementDelegator;

    public function getElementsByTagName(string $name): NodeListDelegator;
}

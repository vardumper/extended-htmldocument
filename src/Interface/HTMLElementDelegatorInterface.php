<?php

declare(strict_types=1);

namespace Html\Interface;

use Dom\HTMLElement;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;

interface HTMLElementDelegatorInterface
{
    public function __construct(HTMLElement $htmlElement);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value): void;

    public function __toString(): string;

    public function setAttributes(array $attributes): void;

    public function hasAttributes(): bool;

    public static function create(HTMLDocumentDelegator $dom): HTMLElementDelegator;

    public static function isUniquePerParent(): bool;

    public static function isUnique(): bool;

    public static function getQualifiedName(): string;

    public static function childOf(): array;

    public static function parentOf(): array;
}

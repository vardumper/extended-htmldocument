<?php

declare(strict_types=1);

namespace Html\Interface;

use Dom\HTMLElement;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;

interface HTMLElementDelegatorInterface
{
    public function __construct(HTMLElement $htmlElement, ?TemplateGeneratorInterface $renderer = null);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value): void;

    public function __toString(): string;

    public function setId(string $id): static;

    public function setClass(string $className): static;

    public function setClassName(string $className): static;

    public function getId(): ?string;

    public function getClass(): ?string;

    public function getClassName(): ?string;

    public function setAttributes(array $attributes): static;

    public function setAttribute(string $name, mixed $value): static;

    public function setTextContent(string $textContent): static;

    public function getTextContent(): ?string;

    public function setInnerHTML(string $innerHTML): static;

    public function getInnerHTML(): ?string;

    public function setSubstitutedNodeValue(string $value): static;

    public function getSubstitutedNodeValue(): ?string;

    public static function create(HTMLDocumentDelegator $dom): HTMLElementDelegator;

    public static function isUniquePerParent(): bool;

    public static function isUnique(): bool;

    public static function getQualifiedName(): string;

    public static function childOf(): array;

    public static function parentOf(): array;
}

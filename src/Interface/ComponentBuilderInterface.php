<?php

declare(strict_types=1);

namespace Html\Interface;

interface ComponentBuilderInterface
{
    public function buildComponent(
        HTMLDocumentDelegatorInterface $document,
        array $data
    ): HTMLDocumentDelegatorInterface;
}

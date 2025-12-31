<?php

namespace Html\Interface;

use Dom\Text;

/** @property Text $delegated */
interface TextDelegatorInterface
{
    public function __construct(Text $delegated);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value): void;

    public function getText(): Text;

    /**
     * Get the document delegator owning this text node
     */
    public function getOwnerDocument(): \Html\Delegator\HTMLDocumentDelegator;
}

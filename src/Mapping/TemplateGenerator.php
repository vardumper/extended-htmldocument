<?php

declare(strict_types=1);

namespace Html\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class TemplateGenerator
{
    public function __construct(
        public ?string $name = null
    ) {
    }
}

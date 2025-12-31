<?php

declare(strict_types=1);

namespace Html\Helper;

use Symfony\Component\Yaml\Yaml;

final class YamlHelper
{
    /**
     * Parse a YAML file and return the resulting array.
     * Keeps a thin instance wrapper around the static Yaml implementation so we can avoid static access
     * and satisfy static-analysis / phpcs / phpmd rules.
     *
     * @return array<mixed,mixed>
     */
    public function parseFile(string $path): array
    {
        return Yaml::parseFile($path) ?? [];
    }

    /**
     * Dump an array to YAML string.
     *
     * @param mixed $value
     */
    public function dump($value, int $inline = 10, int $indent = 2): string
    {
        return Yaml::dump($value, $inline, $indent);
    }
}

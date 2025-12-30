<?php

declare(strict_types=1);

namespace Html\Helper;

final class TypeMapper
{
    public static function mapToPhpType(string $string): string
    {
        return match ($string) {
            'string' => 'string',
            'integer' => 'int',
            'boolean' => 'bool',
            'uri' => 'string',
            'language_iso' => 'string',
            'color' => 'string',
            'datetime' => 'string',
            'datetime-local' => 'string',
            'date' => 'string',
            'time' => 'string',
            'month' => 'string',
            'week' => 'string',
            'number' => 'int',
            'float' => 'float',
            'script' => 'string',
            'url' => 'string',
            'email' => 'string',
            'tel' => 'string',
            'password' => 'string',
            'hidden' => 'bool|string',
            'image' => 'string',
            'file' => 'string',
            default => $string,
        };
    }
}

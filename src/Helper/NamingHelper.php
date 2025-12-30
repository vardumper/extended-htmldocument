<?php

declare(strict_types=1);

namespace Html\Helper;

final class NamingHelper
{
    public static function toVariableName(string $string): string
    {
        $string = str_replace(['-', '_'], ' ', $string);
        $words = explode(' ', $string);
        $string = implode('', array_map('ucfirst', $words));
        return lcfirst($string);
    }

    public static function toKebapCase(string $string): string
    {
        $string = str_replace(['-', '_'], ' ', $string);
        $string = ucwords($string);
        return str_replace(' ', '', $string);
    }

    public static function getClassName(string $classname): string
    {
        $reserved = Helper::getReservedWords();
        if (in_array(strtolower($classname), $reserved, true)) {
            return $classname . 'Element';
        }
        return $classname;
    }
}

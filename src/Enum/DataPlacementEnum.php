<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DataPlacementEnum - Choose the position of a tooltip. Depends on data-tooltip attribute.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/data-placement/
 * @tutorial an example value can be top
 */

namespace Html\Enum;

enum DataPlacementEnum: string
{
    case TOP = 'top'; // default
    case LEFT = 'left';
    case RIGHT = 'right';
    case BOTTOM = 'bottom';

    public static function getQualifiedName(): string
    {
        return 'data-placement';
    }

    public static function getDefault(): self
    {
        return self::TOP;
    }
}

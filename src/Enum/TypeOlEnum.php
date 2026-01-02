<?php

declare(strict_types=1);

/**
 * This file is retained for backward compatibility and will be removed in a
 * future release. Use `OlTypeEnum` instead.
 *
 * @deprecated Use Html\Enum\OlTypeEnum
 */

namespace Html\Enum;

if (! \class_exists(__NAMESPACE__ . '\\TypeOlEnum')) {
    \class_alias(__NAMESPACE__ . '\\OlTypeEnum', __NAMESPACE__ . '\\TypeOlEnum');
}

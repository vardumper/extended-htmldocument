<?php

declare(strict_types=1);

/**
 * This file is retained for backward compatibility and will be removed in a
 * future release. Use `StyleTypeEnum` instead.
 *
 * @deprecated Use Html\Enum\StyleTypeEnum
 */

namespace Html\Enum;

if (! \class_exists(__NAMESPACE__ . '\\TypeStyleEnum')) {
    \class_alias(__NAMESPACE__ . '\\StyleTypeEnum', __NAMESPACE__ . '\\TypeStyleEnum');
}

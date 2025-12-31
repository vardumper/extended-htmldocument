<?php

declare(strict_types=1);

/**
 * This file is retained for backward compatibility and will be removed in a
 * future release. Use `InputTypeEnum` instead.
 *
 * @deprecated Use Html\Enum\InputTypeEnum
 */

namespace Html\Enum;

if (!\class_exists(__NAMESPACE__ . '\\TypeInputEnum')) {
    \class_alias(__NAMESPACE__ . '\\InputTypeEnum', __NAMESPACE__ . '\\TypeInputEnum');
}

<?php

declare(strict_types=1);

/**
 * This file is retained for backward compatibility and will be removed in a
 * future release. Use `ButtonTypeEnum` instead.
 *
 * @deprecated Use Html\Enum\ButtonTypeEnum
 */

namespace Html\Enum;

// Provide a runtime alias to the canonical enum so existing code that refers
// to `TypeButtonEnum` continues to work while we consolidate to
// `ButtonTypeEnum`.
if (!\class_exists(__NAMESPACE__ . '\\TypeButtonEnum')) {
    \class_alias(__NAMESPACE__ . '\\ButtonTypeEnum', __NAMESPACE__ . '\\TypeButtonEnum');
}

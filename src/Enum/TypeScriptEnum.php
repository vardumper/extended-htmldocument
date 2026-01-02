<?php

declare(strict_types=1);

/**
 * This file is retained for backward compatibility and will be removed in a
 * future release. Use `ScriptTypeEnum` instead.
 *
 * @deprecated Use Html\Enum\ScriptTypeEnum
 */

namespace Html\Enum;

if (! \class_exists(__NAMESPACE__ . '\\TypeScriptEnum')) {
    \class_alias(__NAMESPACE__ . '\\ScriptTypeEnum', __NAMESPACE__ . '\\TypeScriptEnum');
}

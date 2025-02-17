<?php
declare(strict_types=1);

namespace Html\Enum;

enum TargetEnum: string {
    case SELF = '_self';
    case BLANK = '_blank';
    case PARENT = '_parent';
    case TOP = '_top';
    case UNFENCED_TOP = '_unfencedTop';
}
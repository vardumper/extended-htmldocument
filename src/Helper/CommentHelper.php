<?php

declare(strict_types=1);

namespace Html\Helper;

final class CommentHelper
{
    public static function getAttributeComment(array $details): string
    {
        $lines = [];
        $lines[] = $details['description'] ?? '';
        $lines[] = '@category HTML attribute';

        if (isset($details['deprecated']) && $details['deprecated']) {
            $lines[] = '@deprecated' . \PHP_EOL . '    ';
        }
        if (isset($details['defaultValue'])) {
            $lines[] = '@example ' . $details['defaultValue'] . \PHP_EOL . '    ';
        }
        if (isset($details['required']) && $details['required']) {
            $lines[] = '@required' . \PHP_EOL . '    ';
        }

        $comment = '/** ';
        if (count($lines) > 1) {
            $comment .= \PHP_EOL . '     * ' . implode(\PHP_EOL . '     * ', $lines);
        } else {
            $comment .= $lines[0];
        }

        return $comment . ' */' . \PHP_EOL;
    }
}

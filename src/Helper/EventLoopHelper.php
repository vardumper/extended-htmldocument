<?php

declare(strict_types=1);

namespace Html\Helper;

use Revolt\EventLoop;

final class EventLoopHelper
{
    public function repeat(float $interval, callable $callback): void
    {
        EventLoop::repeat($interval, $callback);
    }

    public function onSignal(int $signal, callable $callback): void
    {
        EventLoop::onSignal($signal, $callback);
    }

    public function run(): void
    {
        EventLoop::run();
    }
}

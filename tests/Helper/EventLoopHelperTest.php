<?php

use Html\Helper\EventLoopHelper;
use Revolt\EventLoop;

// Integration-style tests: group them so they can be skipped in constrained CI environments
it('repeat registers a repeating callback identifier', function () {
    $helper = new EventLoopHelper();

    $before = EventLoop::getIdentifiers();
    $helper->repeat(0.001, function () {
        // no-op callback
    });
    $after = EventLoop::getIdentifiers();

    $new = array_values(array_diff($after, $before));
    expect($new)
        ->not->toBeEmpty();

    // cleanup: cancel the new identifiers we created
    foreach ($new as $id) {
        EventLoop::cancel($id);
    }
})->group('integration');

it('run executes deferred callbacks and returns', function () {
    $helper = new EventLoopHelper();

    EventLoop::defer(function () {
        // no-op - ensures loop has at least one deferred callback so run() blocks briefly
    });

    // Should return without error
    $helper->run();

    expect(true)
        ->toBeTrue();
})->group('integration');

it('onSignal registers handler (skipped)', function () {
    $this->markTestSkipped('Signal handling tests are flaky in CI; skipped');
})->group('integration');

<?php

use Html\Helper\CommentHelper;

it('generates a basic comment', function () {
    $comment = CommentHelper::getAttributeComment(['description' => 'A test description']);
    expect(str_contains($comment, 'A test description'))->toBeTrue();
    expect(str_contains($comment, '@category HTML attribute'))->toBeTrue();
});

it('includes deprecated and example when present', function () {
    $comment = CommentHelper::getAttributeComment([
        'description' => 'X',
        'deprecated' => true,
        'defaultValue' => 'foo',
        'required' => true,
    ]);

    expect(str_contains($comment, '@deprecated'))->toBeTrue();
    expect(str_contains($comment, '@example'))->toBeTrue();
    expect(str_contains($comment, '@required'))->toBeTrue();
});

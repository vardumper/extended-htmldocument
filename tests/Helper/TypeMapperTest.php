<?php

use Html\Helper\TypeMapper;

it('maps types correctly', function () {
    expect(TypeMapper::mapToPhpType('integer'))->toBe('int');
    expect(TypeMapper::mapToPhpType('boolean'))->toBe('bool');
    expect(TypeMapper::mapToPhpType('string'))->toBe('string');
    expect(TypeMapper::mapToPhpType('uri'))->toBe('string');
    expect(TypeMapper::mapToPhpType('number'))->toBe('int');
    expect(TypeMapper::mapToPhpType('float'))->toBe('float');
    expect(TypeMapper::mapToPhpType('hidden'))->toBe('bool|string');
    expect(TypeMapper::mapToPhpType('email'))->toBe('string');
    expect(TypeMapper::mapToPhpType('unknown'))->toBe('unknown');
});

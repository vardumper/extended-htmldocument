<?php

use Html\Helper\NamingHelper;

it('converts to variable name correctly', function () {
    expect(NamingHelper::toVariableName('data-theme'))->toBe('dataTheme');
    expect(NamingHelper::toVariableName('aria_label'))->toBe('ariaLabel');
});

it('converts to kebap/case correctly', function () {
    expect(NamingHelper::toKebapCase('data-theme'))->toBe('DataTheme');
    expect(NamingHelper::toKebapCase('aria_label'))->toBe('AriaLabel');
});

it('returns element appended for reserved class names', function () {
    expect(NamingHelper::getClassName('class'))->toBe('classElement');
    expect(NamingHelper::getClassName('Class'))->toBe('ClassElement');
    expect(NamingHelper::getClassName('Button'))->toBe('Button');
});

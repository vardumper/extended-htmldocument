<?php

use Html\Element\Block\Form;
use Html\Element\Inline\Anchor;
use Html\Element\Void\Area;
use Html\Element\Void\Base;
use Html\Enum\TargetEnum;

dataset('elements with target', [
    'inline: a' => fn () => new Anchor(),
    'void: area' => fn () => new Area(),
    'void: base' => fn () => new Base(),
    'block: form' => fn () => new Form(),
]);

test('setTarget accepts browsing context names (frame names)', function (callable $factory) {
    $element = $factory();
    $element->setTarget('framename');

    expect($element->delegated->getAttribute('target'))
        ->toEqual('framename');
    expect($element->getTarget())
        ->toBe('framename');
})->with('elements with target');

test('setTarget accepts keyword enums', function (callable $factory) {
    $element = $factory();
    $element->setTarget(TargetEnum::BLANK);

    expect($element->delegated->getAttribute('target'))
        ->toEqual('_blank');
    expect($element->getTarget())
        ->toBe(TargetEnum::BLANK);
})->with('elements with target');

test('setTarget accepts keyword strings and normalizes to enum', function (callable $factory) {
    $element = $factory();
    $element->setTarget('_blank');

    expect($element->delegated->getAttribute('target'))
        ->toEqual('_blank');
    expect($element->getTarget())
        ->toBe(TargetEnum::BLANK);
})->with('elements with target');

test('setTarget no-ops on invalid strings', function (callable $factory) {
    $invalidTargets = ['', ' ', 'my frame', '_invalid'];

    foreach ($invalidTargets as $invalidTarget) {
        $element = $factory();
        $element->setTarget($invalidTarget);

        expect($element->delegated->hasAttribute('target'))
            ->toBeFalse();
        expect($element->getTarget())
            ->toBeNull();
    }
})->with('elements with target');

<?php

use Html\Mapping\TemplateGenerator;

test('TemplateGenerator attribute can be instantiated', function () {
    $generator = new TemplateGenerator();
    expect($generator)->toBeInstanceOf(TemplateGenerator::class);
});

test('TemplateGenerator attribute accepts name', function () {
    $generator = new TemplateGenerator('blade');
    expect($generator->name)->toBe('blade');
});

test('TemplateGenerator attribute accepts null name', function () {
    $generator = new TemplateGenerator(null);
    expect($generator->name)->toBeNull();
});

test('TemplateGenerator attribute has default null name', function () {
    $generator = new TemplateGenerator();
    expect($generator->name)->toBeNull();
});
<?php

use Html\Trait\NativePropertiesTrait;

class TestNativeProperties {
    use NativePropertiesTrait;

    // define properties that trait expects to exist
    public ?string $textContent = null;
    public string $innerHTML = '';
    public string $nodeValue = '';
    public string $substitutedNodeValue = '';
}

test('textContent setter and getter', function () {
    $t = new TestNativeProperties();

    $t->setTextContent('hello');

    expect($t->getTextContent())->toBe('hello');
});

test('innerHTML setter and getter', function () {
    $t = new TestNativeProperties();

    $t->setInnerHTML('<b>bold</b>');

    expect($t->getInnerHTML())->toBe('<b>bold</b>');
});

test('nodeValue setter and getter', function () {
    $t = new TestNativeProperties();

    $t->setNodeValue('node');

    expect($t->getNodeValue())->toBe('node');
});

test('substitutedNodeValue setter and getter', function () {
    $t = new TestNativeProperties();

    $t->setSubstitutedNodeValue('sub');

    expect($t->getSubstitutedNodeValue())->toBe('sub');
});

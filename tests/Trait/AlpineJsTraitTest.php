<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Division;
use Html\Element\Block\Template;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
});

test('setAlpineAttribute with x-data', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute('x-data', '{ count: 0 }');
    expect($div->getAttribute('x-data'))->toBe('{ count: 0 }');
});

test('setAlpineAttribute with shortcut @click', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute('@click', 'count++');
    expect($div->getAttribute('x-on:click'))->toBe('count++');
});

test('setAlpineAttribute with shortcut :class', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute(':class', 'active ? "active" : ""');
    expect($div->getAttribute('x-bind:class'))->toBe('active ? "active" : ""');
});

test('setAlpineAttribute with x-show', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute('show', 'isVisible');
    expect($div->getAttribute('x-show'))->toBe('isVisible');
});

test('setAlpineAttribute with x-if on template', function () {
    $template = Template::create($this->document);
    $template->setAlpineAttribute('if', 'condition');
    expect($template->getAttribute('x-if'))->toBe('condition');
});

test('setAlpineAttribute with x-for on template', function () {
    $template = Template::create($this->document);
    $template->setAlpineAttribute('for', 'item in items');
    expect($template->getAttribute('x-for'))->toBe('item in items');
});

test('setAlpineAttribute with x-if on non-template throws exception', function () {
    $div = Division::create($this->document);
    expect(fn() => $div->setAlpineAttribute('if', 'condition'))->toThrow(\InvalidArgumentException::class, 'Alpine directive \'x-if\' is only allowed on <template> elements');
});

test('setAlpineAttribute with x-for on non-template throws exception', function () {
    $div = Division::create($this->document);
    expect(fn() => $div->setAlpineAttribute('for', 'item in items'))->toThrow(\InvalidArgumentException::class, 'Alpine directive \'x-for\' is only allowed on <template> elements');
});

test('getAlpineAttribute', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute('x-data', '{ count: 0 }');
    expect($div->getAlpineAttribute('x-data'))->toBe('{ count: 0 }');
});

test('getAlpineAttributes', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute('x-data', '{ count: 0 }');
    $div->setAlpineAttribute('@click', 'count++');
    $attributes = $div->getAlpineAttributes();
    expect($attributes)->toHaveKey('x-data', '{ count: 0 }');
    expect($attributes)->toHaveKey('@click', 'count++');
});

test('setAlpineAttributes multiple', function () {
    $div = Division::create($this->document);
    $div->setAlpineAttributes([
        'x-data' => '{ count: 0 }',
        '@click' => 'count++',
        ':class' => 'active ? "active" : ""'
    ]);
    expect($div->getAttribute('x-data'))->toBe('{ count: 0 }');
    expect($div->getAttribute('x-on:click'))->toBe('count++');
    expect($div->getAttribute('x-bind:class'))->toBe('active ? "active" : ""');
});

test("__toString renders shorthand attributes", function () {
    $div = Division::create($this->document);
    $div->setAlpineAttribute("@click", "count++");
    $div->setAlpineAttribute(":class", "active ? \"active\" : \"\"");
    $div->setAlpineAttribute("x-data", "{ count: 0 }");
    $html = (string) $div;
    expect($html)->toContain("@click=\"count++\"");
    expect($html)->toContain(":class=\"active ? &quot;active&quot; : &quot;&quot;\"");
    expect($html)->toContain("x-data=\"{ count: 0 }\"");
    expect($html)->not()->toContain("x-on:click");
    expect($html)->not()->toContain("x-bind:class");
});

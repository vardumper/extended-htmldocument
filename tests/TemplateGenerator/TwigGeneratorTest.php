<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\Division;
use Html\Element\Block\Form;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\TwigGenerator;

beforeEach(function () {
    $this->generator = new TwigGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(TwigGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('twig');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('{component}.{extension}');
});

test('can render elements', function () {
    expect($this->generator->canRenderElements())
        ->toBeTrue();
});

test('can render documents', function () {
    expect($this->generator->canRenderDocuments())
        ->toBeFalse();
});

test('is templated', function () {
    expect($this->generator->isTemplated())
        ->toBeFalse();
});

test('render element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');
    $result = $this->generator->render($element);
    expect($result)->toBeString();
    expect($result)->toContain('<a');
    expect($result)->toContain('href');
    expect($result)->toContain('{% block');
});

test('render document', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Body::create($document);
    $document->appendChild($element);
    $result = $this->generator->render($document);
    expect($result)->toBeNull();
});

test('render invalid', function () {
    expect($this->generator->render('string'))
        ->toBe(null);
});

test('set component handle', function () {
    $reflection = new ReflectionClass($this->generator);
    $property = $reflection->getProperty('componentHandle');
    $property->setAccessible(true);

    // Initial value
    expect($property->getValue($this->generator))->toBe('component');

    // Set new value
    $this->generator->setComponentHandle('custom');
    expect($property->getValue($this->generator))->toBe('custom');
});

test('render composed element with parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);

    $result = $this->generator->renderComposedElement($element);
    expect($result)->toBeString();
    expect($result)->toContain('{% block form_composed %}');
    expect($result)->toContain('{% embed \'../block/form.twig\'');
    expect($result)->toContain('{% endblock %}');
});

test('render composed element without parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);

    $result = $this->generator->renderComposedElement($element);
    expect($result)->toBeNull();
});

test('render composed element excluded', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document);

    $result = $this->generator->renderComposedElement($element);
    expect($result)->toBeNull();
});

test('build composed template', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildComposedTemplate');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);
    $ref = new ReflectionClass($element);
    $childOf = [];
    $parentOf = $ref->getStaticPropertyValue('parentOf', []);

    $result = $method->invoke($this->generator, 'form', 'Form', 'A form element', $ref, $childOf, $parentOf);

    expect($result)->toBeString();
    expect($result)->toContain('{% block form_composed %}');
    expect($result)->toContain('{% embed \'../block/form.twig\'');
    expect($result)->toContain('CONTENT MODEL:');
    expect($result)->toContain('Can contain:');
});

test('determine level block', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Block\\Form');
    expect($result)->toBe('block');
});

test('determine level inline', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Inline\\Anchor');
    expect($result)->toBe('inline');
});

test('determine level void', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Void\\Area');
    expect($result)->toBe('void');
});

test('collect children for composed template', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedTemplate');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);
    $ref = new ReflectionClass($element);
    $parentOf = $ref->getStaticPropertyValue('parentOf', []);

    $result = $method->invoke($this->generator, 'form', $parentOf, $ref);

    expect($result)->toBeArray();
    expect(count($result))->toBeGreaterThan(0);
    foreach ($result as $child) {
        expect($child)->toHaveKey('twigCode');
        expect($child['twigCode'])->toBeString();
    }
});

test('render head', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderHead');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $result = $method->invoke($this->generator, $document);

    // Since getDocumentMetadata returns empty array, renderHead should return null
    expect($result)->toBeNull();
});

test('render body', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderBody');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $body = Body::create($document);
    $document->appendChild($body);

    $result = $method->invoke($this->generator, $document);

    expect($result)->toBeString();
    expect($result)->toContain('{% block body %}');
});

test('get document metadata', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('getDocumentMetadata');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $result = $method->invoke($this->generator, $document);

    expect($result)->toBeArray();
    expect($result)->toBeEmpty();
});

test('render twig template', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderTwigTemplate');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'head', ['test' => 'data']);

    // Since loadTwigTemplate returns null, renderTwigTemplate should return null
    expect($result)->toBeNull();
});

test('load twig template', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('loadTwigTemplate');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'head');

    expect($result)->toBeNull();
});

test('camel to kebab', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('camelToKebab');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'camelCase'))->toBe('camel-case');
    expect($method->invoke($this->generator, 'dataAttribute'))->toBe('data-attribute');
    expect($method->invoke($this->generator, 'simple'))->toBe('simple');
});
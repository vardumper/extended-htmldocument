<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Article;
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
    ->toBeTrue();
});

test('is templated', function () {
    expect($this->generator->isTemplated())
    ->toBeTrue();
});

test('render element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');
    $result = $this->generator->render($element);
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<a');
    expect($result)
        ->toContain('href');
    expect($result)
        ->toContain('{% block');
});

test('render alpine attributes as key/value pairs', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Article::create($document);

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain(
            "{% if attribute(_context, 'alpine-attributes') is defined and attribute(_context, 'alpine-attributes')|length > 0 %}"
        );
    expect($result)
        ->toContain("{% for __k, __v in attribute(_context, 'alpine-attributes') %}");
    expect($result)
        ->toContain('{{ __k }}="{{ __v }}"');
    // ensure the block only appears once
    expect(
        substr_count(
            $result,
            "attribute(_context, 'alpine-attributes') is defined and attribute(_context, 'alpine-attributes')|length > 0"
        )
    )
        ->toBe(1);
});

test('render data attributes as key/value pairs', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Article::create($document);

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain(
            "{% if attribute(_context, 'data-attributes') is defined and attribute(_context, 'data-attributes')|length > 0 %}"
        );
    expect($result)
        ->toContain("{% for __k, __v in attribute(_context, 'data-attributes') %}");
    expect($result)
        ->toContain('data-{{ __k }}="{{ __v }}"');
    // ensure the block only appears once
    expect(
        substr_count(
            $result,
            "attribute(_context, 'data-attributes') is defined and attribute(_context, 'data-attributes')|length > 0"
        )
    )
        ->toBe(1);
});



test('render document', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Body::create($document);
    $document->appendChild($element);
    $result = $this->generator->render($document);
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('This file is auto-generated');
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
    expect($property->getValue($this->generator))
        ->toBe('component');

    // Set new value
    $this->generator->setComponentHandle('custom');
    expect($property->getValue($this->generator))
        ->toBe('custom');
});

test('get component handle', function () {
    $this->generator->setComponentHandle('custom');

    expect($this->generator->getComponentHandle())
        ->toBe('custom');
});

test('render composed element with parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);

    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('{% block form_composed %}');
    expect($result)
        ->toContain('{% embed \'../block/form.twig\'');
    expect($result)
        ->toContain('{% endblock %}');
});

test('render composed element without parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);

    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeNull();
});

test('render composed element excluded', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document);

    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeNull();
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

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('{% block form_composed %}');
    expect($result)
        ->toContain('{% embed \'../block/form.twig\'');
    expect($result)
        ->toContain('CONTENT MODEL:');
    expect($result)
        ->toContain('Can contain:');
});

test('determine level block', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Block\\Form');
    expect($result)
        ->toBe('block');
});

test('determine level inline', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Inline\\Anchor');
    expect($result)
        ->toBe('inline');
});

test('determine level void', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Void\\Area');
    expect($result)
        ->toBe('void');
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

    expect($result)
        ->toBeArray();
    expect(count($result))
        ->toBeGreaterThan(0);
    foreach ($result as $child) {
        expect($child)->toHaveKey('twigCode');
        expect($child['twigCode'])->toBeString();
    }
});

test('set document render mode normalizes and validates values', function () {
    $reflection = new ReflectionClass($this->generator);
    $property = $reflection->getProperty('documentRenderMode');
    $property->setAccessible(true);

    $this->generator->setDocumentRenderMode(' include ');
    expect($property->getValue($this->generator))
        ->toBe('include');

    $this->generator->setDocumentRenderMode('unsupported');
    expect($property->getValue($this->generator))
        ->toBe('raw');
});

test('render document include mode uses include/embed templates', function () {
    $this->generator->setDocumentRenderMode('include');

    $document = HTMLDocumentDelegator::createEmpty();
    $body = Body::create($document);
    $anchor = Anchor::create($document);
    $anchor->setHref('https://example.com');
    $anchor->append('Example');
    $body->appendChild($anchor);
    $document->appendChild($body);

    $result = $this->generator->render($document);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Strict mode: include');
    expect($result)
        ->toContain("{% embed 'inline/a/a.twig'");
});

test('extract twig expression helper', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('extractTwigExpression');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, '{{ user.name }}'))
        ->toBe('user.name');
    expect($method->invoke($this->generator, 'plain-text'))
        ->toBeNull();
});

test('build twig map string helper', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildTwigMapString');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, [
        'id' => 'main',
        'class' => 'hero',
        'content' => ['__twig_expr' => 'user.name'],
    ]);

    expect($result)
        ->toContain('id:');
    expect($result)
        ->toContain('class:');
    expect($result)
        ->toContain('content: user.name');
});

test('resolve twig template path helper', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('resolveTwigTemplatePath');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'a'))
        ->toBe('inline/a/a.twig');
    expect($method->invoke($this->generator, 'not-a-real-tag'))
        ->toBeNull();
});

test('render document method directly', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderDocument');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $body = Body::create($document);
    $document->appendChild($body);

    $result = $method->invoke($this->generator, $document);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('This file is auto-generated');
    expect($result)
        ->toContain('Component: component');
});

test('render document use mode falls back to embed strategy', function () {
    $this->generator->setDocumentRenderMode('use');

    $document = HTMLDocumentDelegator::createEmpty();
    $body = Body::create($document);
    $anchor = Anchor::create($document);
    $anchor->setHref('https://example.com');
    $anchor->append('Go');
    $body->appendChild($anchor);
    $document->appendChild($body);

    $result = $this->generator->render($document);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Strict mode: use');
    expect($result)
        ->toContain('{% embed');
});

test('camel to kebab', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('camelToKebab');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'camelCase'))
        ->toBe('camel-case');
    expect($method->invoke($this->generator, 'dataAttribute'))
        ->toBe('data-attribute');
    expect($method->invoke($this->generator, 'simple'))
        ->toBe('simple');
});

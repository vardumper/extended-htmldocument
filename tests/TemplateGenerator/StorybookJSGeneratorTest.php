<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\Division;
use Html\Element\Block\Form;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\StorybookJSGenerator;
use ReflectionClass;

beforeEach(function () {
    $this->generator = new StorybookJSGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(StorybookJSGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('stories.js');
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
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('export default');
    expect($result)
        ->toContain('href');
    expect($result)
        ->toContain('argTypes');
});

test('render document', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Body::create($document);
    $document->appendChild($element);
    $result = $this->generator->render($document);
    expect($result)
        ->toBeNull();
});

test('render invalid', function () {
    expect($this->generator->render('string'))
        ->toBe(null);
});

test('render composed element with empty parentOf returns null', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeNull();
});

test('render composed element with excluded element returns null', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document); // div is in excluded list
    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeNull();
});

test('render composed element with valid element returns story', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);
    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Form - Composed');
    expect($result)
        ->toContain('export default');
    expect($result)
        ->toContain('import');
});

test('determine level for block element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);
    $result = $method->invoke($this->generator, Body::class);
    expect($result)
        ->toBe('block');
});

test('determine level for inline element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);
    $result = $method->invoke($this->generator, Anchor::class);
    expect($result)
        ->toBe('inline');
});

test('determine level for void element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);
    $result = $method->invoke($this->generator, \Html\Element\Void\BreakElement::class);
    expect($result)
        ->toBe('void');
});

test('generate render assignment for string attribute', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('generateRenderAssignment');
    $method->setAccessible(true);
    $result = $method->invoke($this->generator, 'className', 'class', 'string');
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('if (className)');
    expect($result)
        ->toContain('el.setAttribute(\'class\', className)');
});

test('generate render assignment for boolean attribute', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('generateRenderAssignment');
    $method->setAccessible(true);
    $result = $method->invoke($this->generator, 'disabled', 'disabled', 'boolean');
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('if (disabled)');
    expect($result)
        ->toContain('el.setAttribute(\'disabled\', disabled)');
});

test('generate render assignment for data-theme special case', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('generateRenderAssignment');
    $method->setAccessible(true);
    $result = $method->invoke($this->generator, 'dataTheme', 'data-theme', 'string');
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('data-theme');
    expect($result)
        ->toContain('storybook-root');
});

test('build composed story', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildComposedStory');
    $method->setAccessible(true);

    $formRef = new ReflectionClass(Form::class);
    $childOf = $formRef->getStaticPropertyValue('childOf', []);
    $parentOf = $formRef->getStaticPropertyValue('parentOf', []);

    $result = $method->invoke(
        $this->generator,
        'form',
        'Form',
        'Form description',
        'block',
        $formRef,
        $childOf,
        $parentOf
    );
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Form - Composed');
    expect($result)
        ->toContain('export default');
    expect($result)
        ->toContain('WithValidChildren');
});

test('collect imports for composed story', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectImportsForComposedStory');
    $method->setAccessible(true);

    $formRef = new ReflectionClass(Form::class);
    $parentOf = $formRef->getStaticPropertyValue('parentOf', []);

    $result = $method->invoke($this->generator, 'form', $parentOf, $formRef);
    expect($result)
        ->toBeArray();
    expect($result)
        ->toHaveKey('imports');
    expect($result)
        ->toHaveKey('children');
    expect($result['imports'])->toBeArray();
    expect($result['children'])->toBeArray();
});

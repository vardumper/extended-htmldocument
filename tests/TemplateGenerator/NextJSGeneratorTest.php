<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\Division;
use Html\Element\Block\Form;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Input;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\NextJSGenerator;
use ReflectionClass;

beforeEach(function () {
    $this->generator = new NextJSGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(NextJSGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('tsx');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('{Component}.{extension}');
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

test('render element with complex attributes', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Input::create($document);
    $element->setType('email');
    $element->setDisabled(true);
    $element->setRequired(true);
    $result = $this->generator->render($element);
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('React');
    expect($result)
        ->toContain('type');
    expect($result)
        ->toContain('disabled');
    expect($result)
        ->toContain('required');
    expect($result)
        ->toContain('boolean');
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

test('render composed element with valid element returns component', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);
    $result = $this->generator->renderComposedElement($element);
    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('FormExample');
    expect($result)
        ->toContain('React');
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

test('render element method', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderElement');
    $method->setAccessible(true);

    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $result = $method->invoke($this->generator, $element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('React');
    expect($result)
        ->toContain('A'); // Component name is 'A' from QUALIFIED_NAME
    expect($result)
        ->toContain('interface');
});

test('build next js component method', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildNextJSComponent');
    $method->setAccessible(true);

    $props = [
        'children' => [
            'name' => 'children',
            'type' => 'React.ReactNode',
            'optional' => true,
            'description' => 'The content to display in the element',
        ],
        'className' => [
            'name' => 'className',
            'type' => 'string',
            'optional' => true,
            'description' => 'CSS class names',
        ],
    ];

    $result = $method->invoke($this->generator, 'TestComponent', 'div', 'Test', 'A test component', $props, false);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('TestComponent');
    expect($result)
        ->toContain('React.FC');
    expect($result)
        ->toContain('interface TestComponentProps');
    expect($result)
        ->toContain('React.createElement');
});

test('build composed component method', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildComposedComponent');
    $method->setAccessible(true);

    $ref = new ReflectionClass(Form::class);
    $result = $method->invoke(
        $this->generator,
        'FormExample',
        'form',
        'Form',
        'A form element',
        $ref,
        [],
        [Anchor::class, Input::class]
    );

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('FormExample');
    expect($result)
        ->toContain('Composed Template');
    expect($result)
        ->toContain('React.FC');
});

test('collect imports recursively method', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectImportsRecursively');
    $method->setAccessible(true);

    $collected = [];
    $result = $method->invokeArgs($this->generator, [[Anchor::class, Input::class], 'form', &$collected]);

    expect($result)
        ->toBeArray();
    expect($result)
        ->toHaveCount(2);
    expect($result[0])->toHaveKey('componentName');
    expect($result[0])->toHaveKey('elementName');
    expect($result[0])->toHaveKey('level');
});

test('generate nested example from content model method', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('generateNestedExampleFromContentModel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'form', [Anchor::class, Input::class], 3, 0);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<A>'); // Component name is 'A' from QUALIFIED_NAME
    expect($result)
        ->toContain('Input'); // Input component is present
});

test('generate leaf example method', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('generateLeafExample');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'input', 'Input', '  ', 0);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<Input');
    expect($result)
        ->toContain('type="text"');
});

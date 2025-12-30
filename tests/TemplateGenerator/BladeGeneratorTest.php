<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Article;
use Html\Element\Block\Body;
use Html\Element\Block\Division;
use Html\Element\Block\Form;
use Html\Element\Inline\Anchor;
use Html\Element\Void\Base;
use Html\Element\Void\Head;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\BladeGenerator;

beforeEach(function () {
    $this->generator = new BladeGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(BladeGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('blade.php');
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
    expect($result)->toContain('@section');
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

test('render composed element with parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);

    $result = $this->generator->renderComposedElement($element);

    expect($result)->toBeString();
    expect($result)->toContain('{{--');
    expect($result)->toContain('auto-generated');
    expect($result)->toContain('Form');
    expect($result)->toContain('Composed Example');
    expect($result)->toContain('CONTENT MODEL');
    expect($result)->toContain('@section');
    expect($result)->toContain('<form');
});

test('render composed element without parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document); // Division doesn't have parentOf

    $result = $this->generator->renderComposedElement($element);

    expect($result)->toBeNull();
});

test('render composed element with excluded element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Article::create($document); // Article is in the excluded list

    $result = $this->generator->renderComposedElement($element);

    expect($result)->toBeNull();
});

test('camel to kebab conversion', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('camelToKebab');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'camelCaseString'))
        ->toBe('camel-case-string');

    expect($method->invoke($this->generator, 'simple'))
        ->toBe('simple');

    expect($method->invoke($this->generator, 'HTMLAttribute'))
        ->toBe('htmlattribute');
});

test('render element with self closing tag', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Base::create($document);
    $element->setHref('https://example.com');
    $result = $this->generator->render($element);
    expect($result)->toBeString();
    expect($result)->toContain('<base');
    expect($result)->toContain('href');
    expect($result)->toContain('/>');
    expect($result)->toContain('@section');
});

test('render composed element with empty parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Base::create($document); // Base has empty parentOf array

    $result = $this->generator->renderComposedElement($element);

    expect($result)->toBeNull();
});

test('determine level for void element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineLevel');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, Base::class))
        ->toBe('void');

    expect($method->invoke($this->generator, 'Html\\Element\\Void\\Base'))
        ->toBe('void');
});

test('collect children for composed blade template with priority filtering', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedBladeTemplate');
    $method->setAccessible(true);

    // Create a form element which has priority elements defined
    $document = HTMLDocumentDelegator::createEmpty();
    $form = Form::create($document);
    $formRef = new ReflectionClass($form);

    // Get the parentOf array from Form
    $parentOf = $formRef->getStaticPropertyValue('parentOf', []);

    // Call the method
    $result = $method->invoke($this->generator, 'form', $parentOf, $formRef);

    expect($result)->toBeArray();
    // Should contain blade code for child elements
    if (!empty($result)) {
        expect($result[0])->toHaveKey('bladeCode');
        expect($result[0]['bladeCode'])->toContain('@include');
    }
});

test('collect children for composed blade template with head element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedBladeTemplate');
    $method->setAccessible(true);

    // Use the Head class reflection directly
    $headRef = new ReflectionClass('Html\\Element\\Void\\Head');

    // Get the actual parentOf array from Head
    $parentOf = $headRef->getStaticPropertyValue('parentOf', []);

    $result = $method->invoke($this->generator, 'head', $parentOf, $headRef);

    expect($result)->toBeArray();
    // Head should allow up to 6 children
    expect(count($result))->toBeLessThanOrEqual(6);
});

test('collect children for composed blade template with many children', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedBladeTemplate');
    $method->setAccessible(true);

    // Create a mock element with many children (>10)
    $document = HTMLDocumentDelegator::createEmpty();
    $div = Division::create($document);
    $divRef = new ReflectionClass($div);

    // Mock parentOf with many children
    $mockParentOf = array_fill(0, 15, 'Html\\Element\\Inline\\Anchor'); // 15 children

    $result = $method->invoke($this->generator, 'div', $mockParentOf, $divRef);

    expect($result)->toBeArray();
    // Should limit to 4 children when >10 total
    expect(count($result))->toBeLessThanOrEqual(4);
});

it('collects children for head element with specific self-closing handling', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedBladeTemplate');
    $method->setAccessible(true);

    // Test with Head element which has base, link, meta in parentOf
    $document = HTMLDocumentDelegator::createEmpty();
    $head = Head::create($document);
    $result = $method->invoke($this->generator, 'head', $head::$parentOf, new ReflectionClass($head));

    expect($result)->toBeArray();
    // Head should allow up to 6 children
    expect(count($result))->toBeLessThanOrEqual(6);
    // Should include specific handling for base, link, meta
    $bladeCodes = array_column($result, 'bladeCode');
    expect($bladeCodes)->toContain("@include('blade.void.base.base', ['href' => '/'])\n");
    expect($bladeCodes)->toContain("@include('blade.void.link.link', ['rel' => 'stylesheet', 'href' => '/styles.css'])\n");
    expect($bladeCodes)->toContain("@include('blade.void.meta.meta', ['name' => 'description', 'content' => 'Example'])\n");
});
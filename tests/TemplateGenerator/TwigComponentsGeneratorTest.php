<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\Form;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\TwigComponentsGenerator;

beforeEach(function () {
    $this->generator = new TwigComponentsGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(TwigComponentsGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('html.twig');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('{Component}.{extension}');
});

test('get component class pattern', function () {
    expect($this->generator->getComponentClassPattern())
        ->toBe('{Component}.php');
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
        ->toContain('class');
    expect($result)
        ->toContain('href');
    expect($result)
        ->toContain('Component');
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

test('render component class', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');
    $element->setId('test-link');

    $result = $this->generator->renderComponentClass($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('class A');
    expect($result)
        ->toContain('namespace Html\\TwigComponentBundle\\Twig\\Inline;');
    expect($result)
        ->toContain('use Symfony\\UX\\TwigComponent\\Attribute\\AsTwigComponent;');
    expect($result)
        ->toContain('#[AsTwigComponent(\'A\', template: \'@HtmlTwigComponent/inline/a/a.html.twig\')]');
    expect($result)
        ->toContain('public ?string $href = null;');
    expect($result)
        ->toContain('public ?string $id = null;');
    expect($result)
        ->toContain('#[PreMount]');
    expect($result)
        ->toContain('public function preMount');
    // Data attributes should also be exposed on the component class
    expect($result)
        ->toContain('public ?array $dataAttributes = null;');
    expect($result)
        ->toContain('$resolver->setDefined(\'dataAttributes\')') || expect($result)
        ->toContain('$resolver->setAllowedTypes(\'dataAttributes\', [\'array\'])');
});

test('render composed element with parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);

    $result = $this->generator->renderComposedElement($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Form - Composed Example');
    expect($result)
        ->toContain('<twig:Form class="example">');
    expect($result)
        ->toContain('Can contain:');
});

test('render composed element without parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);

    $result = $this->generator->renderComposedElement($element);

    expect($result)
        ->toBeNull();
});

test('render composed element excluded element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = \Html\Element\Block\Division::create($document);

    $result = $this->generator->renderComposedElement($element);

    expect($result)
        ->toBeNull();
});

test('render alpine attributes in component template', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = \Html\Element\Block\Article::create($document);

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain(
            '{% if this.alpineAttributes is defined and this.alpineAttributes is not null and this.alpineAttributes|length > 0 %}'
        );
    expect($result)
        ->toContain('{% for __k, __v in this.alpineAttributes %}');
    expect($result)
        ->toContain('{{ __k }}="{{ __v }}"');
    // ensure the block only appears once
    expect(
        substr_count(
            $result,
            'this.alpineAttributes is defined and this.alpineAttributes is not null and this.alpineAttributes|length > 0'
        )
    )
        ->toBe(1);
});

test('render data attributes in component template', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = \Html\Element\Block\Article::create($document);

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain(
            '{% if this.dataAttributes is defined and this.dataAttributes is not null and this.dataAttributes|length > 0 %}'
        );
    expect($result)
        ->toContain('{% for __k, __v in this.dataAttributes %}');
    expect($result)
        ->toContain('data-{{ __k }}="{{ __v }}"');
});

test('determine component level block', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineComponentLevel');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'Html\\Element\\Block\\Division'))
        ->toBe('block');
});

test('determine component level inline', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineComponentLevel');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'Html\\Element\\Inline\\Anchor'))
        ->toBe('inline');
});

test('determine component level void', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineComponentLevel');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'Html\\Element\\Void\\Image'))
        ->toBe('void');
});

test('get component class name normal', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('getComponentClassName');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'MyComponent'))
        ->toBe('MyComponent');
});

test('get component class name reserved word', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('getComponentClassName');
    $method->setAccessible(true);

    expect($method->invoke($this->generator, 'for'))
        ->toBe('forElement');
});

test('build composed template', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildComposedTemplate');
    $method->setAccessible(true);

    $parentOf = ['Html\\Element\\Inline\\Input', 'Html\\Element\\Inline\\Label'];

    $result = $method->invoke($this->generator, 'form', 'Form', 'A form element', $parentOf);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Form - Composed Example');
    expect($result)
        ->toContain('<twig:Form class="example">');
    expect($result)
        ->toContain('Can contain: Input, Label');
});

test('collect children for composed template', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedTemplate');
    $method->setAccessible(true);

    $parentOf = ['Html\\Element\\Inline\\Input', 'Html\\Element\\Inline\\Label', 'Html\\Element\\Void\\Area'];

    $result = $method->invoke($this->generator, $parentOf);

    expect($result)
        ->toBeArray();
    expect($result)
        ->toHaveCount(3);
    expect($result[0])->toHaveKey('twigCode');
    expect($result[0]['twigCode'])->toContain('<twig:Input');
});

test('render component class with anchor', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);

    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderComponentClass');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, $element);

    expect($result)
        ->toContain('class A');
    expect($result)
        ->toContain('#[AsTwigComponent(\'A\', template:');
});

test('render composed element with form has parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Form::create($document);

    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderComposedElement');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, $element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('Form - Composed Example');
});

test('render composed element with anchor no parentOf', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);

    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('renderComposedElement');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, $element);

    expect($result)
        ->toBeNull();
});

test('determine component level for block element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineComponentLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Block\\Division');

    expect($result)
        ->toBe('block');
});

test('determine component level for inline element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineComponentLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Inline\\Anchor');

    expect($result)
        ->toBe('inline');
});

test('determine component level for void element', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('determineComponentLevel');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Html\\Element\\Void\\Image');

    expect($result)
        ->toBe('void');
});

test('get component class name for normal word', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('getComponentClassName');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'Form');

    expect($result)
        ->toBe('Form');
});

test('get component class name for reserved word', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('getComponentClassName');
    $method->setAccessible(true);

    $result = $method->invoke($this->generator, 'for');

    expect($result)
        ->toBe('forElement');
});

test('build composed template with mock data', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('buildComposedTemplate');
    $method->setAccessible(true);

    $parentOf = ['Html\\Element\\Inline\\Input'];

    $result = $method->invoke($this->generator, 'form', 'Form', 'A form element', $parentOf);

    expect($result)
        ->toContain('<twig:Form class="example">');
    expect($result)
        ->toContain('Can contain: Input');
});

test('collect children for composed template with valid classes', function () {
    $reflection = new ReflectionClass($this->generator);
    $method = $reflection->getMethod('collectChildrenForComposedTemplate');
    $method->setAccessible(true);

    $parentOf = ['Html\\Element\\Void\\Area'];

    $result = $method->invoke($this->generator, $parentOf);

    expect($result)
        ->toBeArray();
    expect($result[0]['twigCode'])->toContain('<twig:Area');
});

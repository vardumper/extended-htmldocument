<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Html\Model\ExtendedHTMLDocument;
use Html\Element\Anchor;
use Html\Enum\TargetEnum;

class ExtendedHTMLDocumentTest extends TestCase
{
    public function testCreateElement()
    {
        $qualifiedName = 'img';
        $value = 'This is a test element.';
        $dom = ExtendedHTMLDocument::createFromString('<!doctype html><html><head></head><body></body></html>');
        $body = $dom->getElementsByTagName('body')->item(0);

        $element = $dom->createElement($qualifiedName);
        $element->setAttributes([
            'alt' => 'Description of image', 
            'loading' => 'lazy', 
            'width' => '100', 
            'height' => '100',
            'data-example' => 'some-example-string',
            'src'   => 'path/to/image.jpg'
        ]);
        $element->className = 'test-class secondary';
        $element->id = 'test-id';
        $element->textContent = $value;

        $body->appendChild($element->htmlElement);

        $this->assertStringContainsString('test-class secondary', $dom->saveHtml()); // class present
        $this->assertStringContainsString('test-id', $dom->saveHtml()); // id present
        $this->assertStringNotContainsString('This is a test element.', $dom->saveHtml()); // images do not have text content
        $this->assertStringContainsString('Description of image', $dom->saveHtml()); // alt text present
        // $this->assertEquals('100', $element->getAttribute('width')); // width attribute present
        // $this->assertEquals('100', $element->getAttribute('height')); // height attribute present
        // $this->assertEquals('lazy', $element->getAttribute('loading')); // loading attribute present
    }

    public function testCreateAnchor()
    {
        $dom = ExtendedHTMLDocument::createFromString('<!doctype html><html><head></head><body></body></html>');
        $body = $dom->getElementsByTagName('body')->item(0);

        $anchor = Anchor::create($dom);
        $anchor->id = 'main-anchor';
        $anchor->setAttributes([
            'href' => 'https://www.example.com',
            'title' => 'This is a test title.',
            'rel' => 'noopener',
            'target' => TargetEnum::BLANK
        ]);
        // $anchor->target = TargetEnum::BLANK;
        // $anchor->target = '_blank';
        $anchor->textContent = 'This is a test element.';

        $body->appendChild($anchor->htmlElement);

        $this->assertStringContainsString('main-anchor', $dom->saveHtml());
        $this->assertStringContainsString('_blank', $dom->saveHtml());
        $this->assertStringContainsString('This is a test element.', $dom->saveHtml());
    }
}
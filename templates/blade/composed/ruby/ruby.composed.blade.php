{{--
  This file is auto-generated.

  Ruby - Composed Example
  The ruby element represents a ruby annotation. Ruby annotations are short runs of text presented alongside base text, primarily used for East Asian typography to indicate pronunciation or to provide a short annotation.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Division, Footer, Header, Main, MarkedText, Paragraph, Section
  - Can contain: RubyParenthesis, RubyText

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('ruby_composed')
<ruby class="example">
@include('blade.inline.rp.rp', ['content' => 'Example content'])
@include('blade.inline.rp.rp', ['content' => 'Example content'])
@include('blade.inline.rt.rt', ['content' => 'Example content'])
@endsection
</ruby>

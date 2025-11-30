{{--
  This file is auto-generated.

  Figure - Composed Example
  The figure element represents self-contained content, potentially with an optional caption, which is specified using the (optional) figcaption element.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Division, Footer, Header, ListItem, Main, Paragraph, Section
  - Can contain: FigureCaption, Image

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('figure_composed')
<figure class="example">
@include('blade.block.figcaption.figcaption', ['content' => 'Example content'])
@include('blade.inline.img.img', ['src' => '/image.jpg', 'alt' => 'Example'])
@include('blade.inline.img.img', ['src' => '/image.jpg', 'alt' => 'Example'])
@endsection
</figure>

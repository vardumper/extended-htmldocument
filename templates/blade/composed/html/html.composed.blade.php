{{--
  This file is auto-generated.

  HTML - Composed Example
  The root element of an HTML document. It represents the top-level of the HTML structure.

  CONTENT MODEL:
  - Can contain: Body, Head
  - UNIQUE: Only one allowed per document
  - UNIQUE PER PARENT: Only one allowed per parent element

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('html_composed')
<html class="example">
@include('blade.void.head.head', ['content' => 'Example content'])
@include('blade.block.body.body', ['content' => 'Example content'])
@endsection
</html>

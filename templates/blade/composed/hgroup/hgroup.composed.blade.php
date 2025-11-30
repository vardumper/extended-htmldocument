{{--
  This file is auto-generated.

  Headings Group - Composed Example
  The hgroup element represents a multi-level heading for a section of a document. It groups a set of h1–h6 elements.

  CONTENT MODEL:
  - Can contain: Heading1, Heading2, Heading3, Heading4, Heading5, Heading6

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('hgroup_composed')
<hgroup class="example">
@include('blade.block.h1.h1', ['content' => 'Example content'])
@include('blade.block.h1.h1', ['content' => 'Example content'])
@include('blade.block.h2.h2', ['content' => 'Example content'])
@endsection
</hgroup>

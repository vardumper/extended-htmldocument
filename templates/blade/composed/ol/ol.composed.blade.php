{{--
  This file is auto-generated.

  Ordered List - Composed Example
  The ol element represents an ordered list of items. The order of the list is meaningful.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Details, Dialog, Division, Footer, Header, ListItem, Main, Paragraph, Section, Slot, Template
  - Can contain: ListItem

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('ol_composed')
<ol class="example">
@include('blade.block.li.li', ['content' => 'Item 1'])
@include('blade.block.li.li', ['content' => 'Item 2'])
@endsection
</ol>

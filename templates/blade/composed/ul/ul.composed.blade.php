{{--
  This file is auto-generated.

  Unordered List - Composed Example
  The ul element represents an unordered list of items, namely a collection of items that do not have a numerical ordering, and their order in the list is meaningless.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Details, Dialog, Division, Footer, Header, ListItem, Main, Paragraph, Section, Slot, Template
  - Can contain: ListItem

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('ul_composed')
<ul class="example">
@include('blade.block.li.li', ['content' => 'Item 1'])
@include('blade.block.li.li', ['content' => 'Item 2'])
@endsection
</ul>

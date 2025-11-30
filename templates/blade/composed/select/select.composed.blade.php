{{--
  This file is auto-generated.

  Select - Composed Example
  The select element represents a control for selecting amongst a set of options.

  CONTENT MODEL:
  - Can be a child of: Aside, Body, DefinitionDescription, Dialog, Division, Fieldset, Footer, Form, Header, Main, MarkedText, Paragraph, Section, Slot, Template
  - Can contain: OptionGroup, Option

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('select_composed')
<select class="example">
@include('blade.block.optgroup.optgroup', ['content' => 'Example content'])
@include('blade.block.optgroup.optgroup', ['content' => 'Example content'])
@include('blade.block.option.option', ['content' => 'Option 1'])
@endsection
</select>

{{--
  This file is auto-generated.

  Data List - Composed Example
  The datalist element contains a set of option elements that represent the permissible or recommended options available to users.

  CONTENT MODEL:
  - Can be a child of: Body, Fieldset, Form
  - Can contain: Option

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('datalist_composed')
<datalist class="example">
@include('blade.block.option.option', ['content' => 'Option 1'])
@include('blade.block.option.option', ['content' => 'Option 2'])
@endsection
</datalist>

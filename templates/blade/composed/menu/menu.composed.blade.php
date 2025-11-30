{{--
  This file is auto-generated.

  Menu - Composed Example
  The menu element represents a group of commands that a user can perform or activate. It can be used for toolbars, context menus, or listing form controls.

  CONTENT MODEL:
  - Can contain: Button, Form, ListItem, Script, Template

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('menu_composed')
<menu class="example">
@include('blade.inline.button.button', ['content' => 'Button 1'])
@include('blade.inline.button.button', ['content' => 'Button 2'])
@include('blade.block.form.form', ['content' => 'Example content'])
@endsection
</menu>

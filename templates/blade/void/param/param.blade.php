{{--
  This file is auto-generated.

  @component param
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('param')
<param
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($name) && is_bool($name) && $name) name @elseif(isset($name) && $name) name="{{ $name }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($value) && is_bool($value) && $value) value @elseif(isset($value) && $value) value="{{ $value }}" @endif />
@endsection

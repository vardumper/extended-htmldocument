{{--
  This file is auto-generated.

  @component br
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('br')
<br
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif />
@endsection

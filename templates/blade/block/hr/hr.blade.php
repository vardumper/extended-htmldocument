{{--
  This file is auto-generated.

  @component hr
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('hr')
<hr
  @if(isset($align) && is_bool($align) && $align) align @elseif(isset($align) && $align) align="{{ $align }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($color) && is_bool($color) && $color) color @elseif(isset($color) && $color) color="{{ $color }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($noshade) && is_bool($noshade) && $noshade) noshade @elseif(isset($noshade) && $noshade) noshade="{{ $noshade }}" @endif
  @if(isset($size) && is_bool($size) && $size) size @elseif(isset($size) && $size) size="{{ $size }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($width) && is_bool($width) && $width) width @elseif(isset($width) && $width) width="{{ $width }}" @endif />
@endsection

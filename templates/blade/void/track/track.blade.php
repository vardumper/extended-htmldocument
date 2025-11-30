{{--
  This file is auto-generated.

  @component track
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('track')
<track
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($default) && is_bool($default) && $default) default @elseif(isset($default) && $default) default="{{ $default }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($kind) && is_bool($kind) && $kind) kind @elseif(isset($kind) && $kind) kind="{{ $kind }}" @endif
  @if(isset($label) && is_bool($label) && $label) label @elseif(isset($label) && $label) label="{{ $label }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($src) && is_bool($src) && $src) src @elseif(isset($src) && $src) src="{{ $src }}" @endif
  @if(isset($srclang) && is_bool($srclang) && $srclang) srclang @elseif(isset($srclang) && $srclang) srclang="{{ $srclang }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif />
@endsection

{{--
  This file is auto-generated.

  @component meta
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('meta')
<meta
  @if(isset($charset) && is_bool($charset) && $charset) charset @elseif(isset($charset) && $charset) charset="{{ $charset }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($content) && is_bool($content) && $content) content @elseif(isset($content) && $content) content="{{ $content }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($httpEquiv) && is_bool($httpEquiv) && $httpEquiv) http-equiv @elseif(isset($httpEquiv) && $httpEquiv) http-equiv="{{ $httpEquiv }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($name) && is_bool($name) && $name) name @elseif(isset($name) && $name) name="{{ $name }}" @endif
  @if(isset($scheme) && is_bool($scheme) && $scheme) scheme @elseif(isset($scheme) && $scheme) scheme="{{ $scheme }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif />
@endsection

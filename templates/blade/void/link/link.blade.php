{{--
  This file is auto-generated.

  @component link
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('link')
<link
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($crossorigin) && is_bool($crossorigin) && $crossorigin) crossorigin @elseif(isset($crossorigin) && $crossorigin) crossorigin="{{ $crossorigin }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($href) && is_bool($href) && $href) href @elseif(isset($href) && $href) href="{{ $href }}" @endif
  @if(isset($hreflang) && is_bool($hreflang) && $hreflang) hreflang @elseif(isset($hreflang) && $hreflang) hreflang="{{ $hreflang }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($integrity) && is_bool($integrity) && $integrity) integrity @elseif(isset($integrity) && $integrity) integrity="{{ $integrity }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($media) && is_bool($media) && $media) media @elseif(isset($media) && $media) media="{{ $media }}" @endif
  @if(isset($referrerpolicy) && is_bool($referrerpolicy) && $referrerpolicy) referrerpolicy @elseif(isset($referrerpolicy) && $referrerpolicy) referrerpolicy="{{ $referrerpolicy }}" @endif
  @if(isset($rel) && is_bool($rel) && $rel) rel @elseif(isset($rel) && $rel) rel="{{ $rel }}" @endif
  @if(isset($sizes) && is_bool($sizes) && $sizes) sizes @elseif(isset($sizes) && $sizes) sizes="{{ $sizes }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif />
@endsection

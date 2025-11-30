{{--
  This file is auto-generated.

  @component style
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('style')
<style
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($media) && is_bool($media) && $media) media @elseif(isset($media) && $media) media="{{ $media }}" @endif
  @if(isset($nonce) && is_bool($nonce) && $nonce) nonce @elseif(isset($nonce) && $nonce) nonce="{{ $nonce }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif>
  @yield('content')
</style>
@endsection

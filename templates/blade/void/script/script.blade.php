{{--
  This file is auto-generated.

  @component script
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('script')
<script
  @if(isset($async) && is_bool($async) && $async) async @elseif(isset($async) && $async) async="{{ $async }}" @endif
  @if(isset($charset) && is_bool($charset) && $charset) charset @elseif(isset($charset) && $charset) charset="{{ $charset }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($crossorigin) && is_bool($crossorigin) && $crossorigin) crossorigin @elseif(isset($crossorigin) && $crossorigin) crossorigin="{{ $crossorigin }}" @endif
  @if(isset($defer) && is_bool($defer) && $defer) defer @elseif(isset($defer) && $defer) defer="{{ $defer }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($integrity) && is_bool($integrity) && $integrity) integrity @elseif(isset($integrity) && $integrity) integrity="{{ $integrity }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($nonce) && is_bool($nonce) && $nonce) nonce @elseif(isset($nonce) && $nonce) nonce="{{ $nonce }}" @endif
  @if(isset($referrerpolicy) && is_bool($referrerpolicy) && $referrerpolicy) referrerpolicy @elseif(isset($referrerpolicy) && $referrerpolicy) referrerpolicy="{{ $referrerpolicy }}" @endif
  @if(isset($src) && is_bool($src) && $src) src @elseif(isset($src) && $src) src="{{ $src }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif>
  @yield('content')
</script>
@endsection

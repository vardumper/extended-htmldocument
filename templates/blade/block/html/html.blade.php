{{--
  This file is auto-generated.

  @component html
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('html')
<html
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($manifest) && is_bool($manifest) && $manifest) manifest @elseif(isset($manifest) && $manifest) manifest="{{ $manifest }}" @endif>
  @yield('content')
</html>
@endsection

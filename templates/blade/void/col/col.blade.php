{{--
  This file is auto-generated.

  @component col
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('col')
<col
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($span) && is_bool($span) && $span) span @elseif(isset($span) && $span) span="{{ $span }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($width) && is_bool($width) && $width) width @elseif(isset($width) && $width) width="{{ $width }}" @endif />
@endsection

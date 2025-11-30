{{--
  This file is auto-generated.

  @component base
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('base')
<base
  @if(isset($href) && is_bool($href) && $href) href @elseif(isset($href) && $href) href="{{ $href }}" @endif
  @if(isset($target) && is_bool($target) && $target) target @elseif(isset($target) && $target) target="{{ $target }}" @endif />
@endsection

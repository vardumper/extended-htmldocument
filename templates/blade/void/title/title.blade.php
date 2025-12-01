{{--
  This file is auto-generated.

  @component title
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$attrs = [];
@endphp
@section('title')
<title {!! implode(' ', $attrs) !!}>
  @yield('content')
</title>
@endsection

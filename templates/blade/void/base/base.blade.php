{{--
  This file is auto-generated.

  @component base
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$targetChoices = ['_blank' => true, '_parent' => true, '_self' => true, '_top' => true];
$attrs = [];
if (isset($href)) $attrs[] = 'href="' . e($href) . '"';
if (isset($target) && isset($targetChoices[$target])) $attrs[] = 'target="' . e($target) . '"';
@endphp
@section('base')
<base {!! implode(' ', $attrs) !!} />
@endsection

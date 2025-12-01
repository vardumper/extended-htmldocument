{{--
  This file is auto-generated.

  @component colgroup
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($span)) $attrs[] = 'span="' . e($span) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
@endphp
@section('colgroup')
<colgroup {!! implode(' ', $attrs) !!}>
  @yield('content')
</colgroup>
@endsection

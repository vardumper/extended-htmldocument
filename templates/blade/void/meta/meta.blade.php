{{--
  This file is auto-generated.

  @component meta
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$httpEquivChoices = ['content-language' => true, 'content-type' => true, 'default-style' => true, 'refresh' => true];
$attrs = [];
if (isset($charset)) $attrs[] = 'charset="' . e($charset) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($content)) $attrs[] = 'content="' . e($content) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($httpEquiv) && isset($httpEquivChoices[$httpEquiv])) $attrs[] = 'http-equiv="' . e($httpEquiv) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($scheme)) $attrs[] = 'scheme="' . e($scheme) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
@endphp
@section('meta')
<meta {!! implode(' ', $attrs) !!} />
@endsection

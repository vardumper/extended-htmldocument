{{--
  This file is auto-generated.

  @component source
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('source')
<source
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($media) && is_bool($media) && $media) media @elseif(isset($media) && $media) media="{{ $media }}" @endif
  @if(isset($sizes) && is_bool($sizes) && $sizes) sizes @elseif(isset($sizes) && $sizes) sizes="{{ $sizes }}" @endif
  @if(isset($src) && is_bool($src) && $src) src @elseif(isset($src) && $src) src="{{ $src }}" @endif
  @if(isset($srcset) && is_bool($srcset) && $srcset) srcset @elseif(isset($srcset) && $srcset) srcset="{{ $srcset }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif />
@endsection

{{--
  This file is auto-generated.

  @component area
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('area')
<area
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($alt) && is_bool($alt) && $alt) alt @elseif(isset($alt) && $alt) alt="{{ $alt }}" @endif
  @if(isset($autocapitalize) && is_bool($autocapitalize) && $autocapitalize) autocapitalize @elseif(isset($autocapitalize) && $autocapitalize) autocapitalize="{{ $autocapitalize }}" @endif
  @if(isset($autofocus) && is_bool($autofocus) && $autofocus) autofocus @elseif(isset($autofocus) && $autofocus) autofocus="{{ $autofocus }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($contenteditable) && is_bool($contenteditable) && $contenteditable) contenteditable @elseif(isset($contenteditable) && $contenteditable) contenteditable="{{ $contenteditable }}" @endif
  @if(isset($coords) && is_bool($coords) && $coords) coords @elseif(isset($coords) && $coords) coords="{{ $coords }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($download) && is_bool($download) && $download) download @elseif(isset($download) && $download) download="{{ $download }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($href) && is_bool($href) && $href) href @elseif(isset($href) && $href) href="{{ $href }}" @endif
  @if(isset($hreflang) && is_bool($hreflang) && $hreflang) hreflang @elseif(isset($hreflang) && $hreflang) hreflang="{{ $hreflang }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($inputmode) && is_bool($inputmode) && $inputmode) inputmode @elseif(isset($inputmode) && $inputmode) inputmode="{{ $inputmode }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($rel) && is_bool($rel) && $rel) rel @elseif(isset($rel) && $rel) rel="{{ $rel }}" @endif
  @if(isset($shape) && is_bool($shape) && $shape) shape @elseif(isset($shape) && $shape) shape="{{ $shape }}" @endif
  @if(isset($spellcheck) && is_bool($spellcheck) && $spellcheck) spellcheck @elseif(isset($spellcheck) && $spellcheck) spellcheck="{{ $spellcheck }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($target) && is_bool($target) && $target) target @elseif(isset($target) && $target) target="{{ $target }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif />
@endsection

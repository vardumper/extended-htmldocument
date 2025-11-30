{{--
  This file is auto-generated.

  @component img
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('img')
<img
  @if(isset($alt) && is_bool($alt) && $alt) alt @elseif(isset($alt) && $alt) alt="{{ $alt }}" @endif
  @if(isset($ariaAtomic) && is_bool($ariaAtomic) && $ariaAtomic) aria-atomic @elseif(isset($ariaAtomic) && $ariaAtomic) aria-atomic="{{ $ariaAtomic }}" @endif
  @if(isset($ariaDetails) && is_bool($ariaDetails) && $ariaDetails) aria-details @elseif(isset($ariaDetails) && $ariaDetails) aria-details="{{ $ariaDetails }}" @endif
  @if(isset($ariaHidden) && is_bool($ariaHidden) && $ariaHidden) aria-hidden @elseif(isset($ariaHidden) && $ariaHidden) aria-hidden="{{ $ariaHidden }}" @endif
  @if(isset($ariaKeyshortcuts) && is_bool($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts @elseif(isset($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts="{{ $ariaKeyshortcuts }}" @endif
  @if(isset($ariaLabel) && is_bool($ariaLabel) && $ariaLabel) aria-label @elseif(isset($ariaLabel) && $ariaLabel) aria-label="{{ $ariaLabel }}" @endif
  @if(isset($ariaLive) && is_bool($ariaLive) && $ariaLive) aria-live @elseif(isset($ariaLive) && $ariaLive) aria-live="{{ $ariaLive }}" @endif
  @if(isset($ariaRelevant) && is_bool($ariaRelevant) && $ariaRelevant) aria-relevant @elseif(isset($ariaRelevant) && $ariaRelevant) aria-relevant="{{ $ariaRelevant }}" @endif
  @if(isset($ariaRoledescription) && is_bool($ariaRoledescription) && $ariaRoledescription) aria-roledescription @elseif(isset($ariaRoledescription) && $ariaRoledescription) aria-roledescription="{{ $ariaRoledescription }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($crossorigin) && is_bool($crossorigin) && $crossorigin) crossorigin @elseif(isset($crossorigin) && $crossorigin) crossorigin="{{ $crossorigin }}" @endif
  @if(isset($decoding) && is_bool($decoding) && $decoding) decoding @elseif(isset($decoding) && $decoding) decoding="{{ $decoding }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($height) && is_bool($height) && $height) height @elseif(isset($height) && $height) height="{{ $height }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($ismap) && is_bool($ismap) && $ismap) ismap @elseif(isset($ismap) && $ismap) ismap="{{ $ismap }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($referrerpolicy) && is_bool($referrerpolicy) && $referrerpolicy) referrerpolicy @elseif(isset($referrerpolicy) && $referrerpolicy) referrerpolicy="{{ $referrerpolicy }}" @endif
  @if(isset($sizes) && is_bool($sizes) && $sizes) sizes @elseif(isset($sizes) && $sizes) sizes="{{ $sizes }}" @endif
  @if(isset($src) && is_bool($src) && $src) src @elseif(isset($src) && $src) src="{{ $src }}" @endif
  @if(isset($srcset) && is_bool($srcset) && $srcset) srcset @elseif(isset($srcset) && $srcset) srcset="{{ $srcset }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($usemap) && is_bool($usemap) && $usemap) usemap @elseif(isset($usemap) && $usemap) usemap="{{ $usemap }}" @endif
  @if(isset($width) && is_bool($width) && $width) width @elseif(isset($width) && $width) width="{{ $width }}" @endif />
@endsection

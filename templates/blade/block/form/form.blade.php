{{--
  This file is auto-generated.

  @component form
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('form')
<form
  @if(isset($acceptCharset) && is_bool($acceptCharset) && $acceptCharset) accept-charset @elseif(isset($acceptCharset) && $acceptCharset) accept-charset="{{ $acceptCharset }}" @endif
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($action) && is_bool($action) && $action) action @elseif(isset($action) && $action) action="{{ $action }}" @endif
  @if(isset($ariaAtomic) && is_bool($ariaAtomic) && $ariaAtomic) aria-atomic @elseif(isset($ariaAtomic) && $ariaAtomic) aria-atomic="{{ $ariaAtomic }}" @endif
  @if(isset($ariaDetails) && is_bool($ariaDetails) && $ariaDetails) aria-details @elseif(isset($ariaDetails) && $ariaDetails) aria-details="{{ $ariaDetails }}" @endif
  @if(isset($ariaInvalid) && is_bool($ariaInvalid) && $ariaInvalid) aria-invalid @elseif(isset($ariaInvalid) && $ariaInvalid) aria-invalid="{{ $ariaInvalid }}" @endif
  @if(isset($ariaKeyshortcuts) && is_bool($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts @elseif(isset($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts="{{ $ariaKeyshortcuts }}" @endif
  @if(isset($ariaLabel) && is_bool($ariaLabel) && $ariaLabel) aria-label @elseif(isset($ariaLabel) && $ariaLabel) aria-label="{{ $ariaLabel }}" @endif
  @if(isset($ariaLive) && is_bool($ariaLive) && $ariaLive) aria-live @elseif(isset($ariaLive) && $ariaLive) aria-live="{{ $ariaLive }}" @endif
  @if(isset($ariaRelevant) && is_bool($ariaRelevant) && $ariaRelevant) aria-relevant @elseif(isset($ariaRelevant) && $ariaRelevant) aria-relevant="{{ $ariaRelevant }}" @endif
  @if(isset($ariaRoledescription) && is_bool($ariaRoledescription) && $ariaRoledescription) aria-roledescription @elseif(isset($ariaRoledescription) && $ariaRoledescription) aria-roledescription="{{ $ariaRoledescription }}" @endif
  @if(isset($autocomplete) && is_bool($autocomplete) && $autocomplete) autocomplete @elseif(isset($autocomplete) && $autocomplete) autocomplete="{{ $autocomplete }}" @endif
  @if(isset($autocorrect) && is_bool($autocorrect) && $autocorrect) autocorrect @elseif(isset($autocorrect) && $autocorrect) autocorrect="{{ $autocorrect }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($enctype) && is_bool($enctype) && $enctype) enctype @elseif(isset($enctype) && $enctype) enctype="{{ $enctype }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($method) && is_bool($method) && $method) method @elseif(isset($method) && $method) method="{{ $method }}" @endif
  @if(isset($name) && is_bool($name) && $name) name @elseif(isset($name) && $name) name="{{ $name }}" @endif
  @if(isset($novalidate) && is_bool($novalidate) && $novalidate) novalidate @elseif(isset($novalidate) && $novalidate) novalidate="{{ $novalidate }}" @endif
  @if(isset($slot) && is_bool($slot) && $slot) slot @elseif(isset($slot) && $slot) slot="{{ $slot }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($target) && is_bool($target) && $target) target @elseif(isset($target) && $target) target="{{ $target }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif>
  @yield('content')
</form>
@endsection

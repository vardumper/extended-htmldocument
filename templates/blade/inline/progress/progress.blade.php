{{--
  This file is auto-generated.

  @component progress
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('progress')
<progress
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($ariaAtomic) && is_bool($ariaAtomic) && $ariaAtomic) aria-atomic @elseif(isset($ariaAtomic) && $ariaAtomic) aria-atomic="{{ $ariaAtomic }}" @endif
  @if(isset($ariaDetails) && is_bool($ariaDetails) && $ariaDetails) aria-details @elseif(isset($ariaDetails) && $ariaDetails) aria-details="{{ $ariaDetails }}" @endif
  @if(isset($ariaKeyshortcuts) && is_bool($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts @elseif(isset($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts="{{ $ariaKeyshortcuts }}" @endif
  @if(isset($ariaLive) && is_bool($ariaLive) && $ariaLive) aria-live @elseif(isset($ariaLive) && $ariaLive) aria-live="{{ $ariaLive }}" @endif
  @if(isset($ariaRelevant) && is_bool($ariaRelevant) && $ariaRelevant) aria-relevant @elseif(isset($ariaRelevant) && $ariaRelevant) aria-relevant="{{ $ariaRelevant }}" @endif
  @if(isset($ariaRoledescription) && is_bool($ariaRoledescription) && $ariaRoledescription) aria-roledescription @elseif(isset($ariaRoledescription) && $ariaRoledescription) aria-roledescription="{{ $ariaRoledescription }}" @endif
  @if(isset($ariaValuemax) && is_bool($ariaValuemax) && $ariaValuemax) aria-valuemax @elseif(isset($ariaValuemax) && $ariaValuemax) aria-valuemax="{{ $ariaValuemax }}" @endif
  @if(isset($ariaValuemin) && is_bool($ariaValuemin) && $ariaValuemin) aria-valuemin @elseif(isset($ariaValuemin) && $ariaValuemin) aria-valuemin="{{ $ariaValuemin }}" @endif
  @if(isset($ariaValuenow) && is_bool($ariaValuenow) && $ariaValuenow) aria-valuenow @elseif(isset($ariaValuenow) && $ariaValuenow) aria-valuenow="{{ $ariaValuenow }}" @endif
  @if(isset($ariaValuetext) && is_bool($ariaValuetext) && $ariaValuetext) aria-valuetext @elseif(isset($ariaValuetext) && $ariaValuetext) aria-valuetext="{{ $ariaValuetext }}" @endif
  @if(isset($autocapitalize) && is_bool($autocapitalize) && $autocapitalize) autocapitalize @elseif(isset($autocapitalize) && $autocapitalize) autocapitalize="{{ $autocapitalize }}" @endif
  @if(isset($autofocus) && is_bool($autofocus) && $autofocus) autofocus @elseif(isset($autofocus) && $autofocus) autofocus="{{ $autofocus }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($contenteditable) && is_bool($contenteditable) && $contenteditable) contenteditable @elseif(isset($contenteditable) && $contenteditable) contenteditable="{{ $contenteditable }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($inputmode) && is_bool($inputmode) && $inputmode) inputmode @elseif(isset($inputmode) && $inputmode) inputmode="{{ $inputmode }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($max) && is_bool($max) && $max) max @elseif(isset($max) && $max) max="{{ $max }}" @endif
  @if(isset($slot) && is_bool($slot) && $slot) slot @elseif(isset($slot) && $slot) slot="{{ $slot }}" @endif
  @if(isset($spellcheck) && is_bool($spellcheck) && $spellcheck) spellcheck @elseif(isset($spellcheck) && $spellcheck) spellcheck="{{ $spellcheck }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif
  @if(isset($value) && is_bool($value) && $value) value @elseif(isset($value) && $value) value="{{ $value }}" @endif>
  @yield('content')
</progress>
@endsection

{{--
  This file is auto-generated.

  @component select
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('select')
<select
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($ariaActivedescendant) && is_bool($ariaActivedescendant) && $ariaActivedescendant) aria-activedescendant @elseif(isset($ariaActivedescendant) && $ariaActivedescendant) aria-activedescendant="{{ $ariaActivedescendant }}" @endif
  @if(isset($ariaAtomic) && is_bool($ariaAtomic) && $ariaAtomic) aria-atomic @elseif(isset($ariaAtomic) && $ariaAtomic) aria-atomic="{{ $ariaAtomic }}" @endif
  @if(isset($ariaAutocomplete) && is_bool($ariaAutocomplete) && $ariaAutocomplete) aria-autocomplete @elseif(isset($ariaAutocomplete) && $ariaAutocomplete) aria-autocomplete="{{ $ariaAutocomplete }}" @endif
  @if(isset($ariaControls) && is_bool($ariaControls) && $ariaControls) aria-controls @elseif(isset($ariaControls) && $ariaControls) aria-controls="{{ $ariaControls }}" @endif
  @if(isset($ariaDescribedby) && is_bool($ariaDescribedby) && $ariaDescribedby) aria-describedby @elseif(isset($ariaDescribedby) && $ariaDescribedby) aria-describedby="{{ $ariaDescribedby }}" @endif
  @if(isset($ariaDetails) && is_bool($ariaDetails) && $ariaDetails) aria-details @elseif(isset($ariaDetails) && $ariaDetails) aria-details="{{ $ariaDetails }}" @endif
  @if(isset($ariaDisabled) && is_bool($ariaDisabled) && $ariaDisabled) aria-disabled @elseif(isset($ariaDisabled) && $ariaDisabled) aria-disabled="{{ $ariaDisabled }}" @endif
  @if(isset($ariaExpanded) && is_bool($ariaExpanded) && $ariaExpanded) aria-expanded @elseif(isset($ariaExpanded) && $ariaExpanded) aria-expanded="{{ $ariaExpanded }}" @endif
  @if(isset($ariaHaspopup) && is_bool($ariaHaspopup) && $ariaHaspopup) aria-haspopup @elseif(isset($ariaHaspopup) && $ariaHaspopup) aria-haspopup="{{ $ariaHaspopup }}" @endif
  @if(isset($ariaInvalid) && is_bool($ariaInvalid) && $ariaInvalid) aria-invalid @elseif(isset($ariaInvalid) && $ariaInvalid) aria-invalid="{{ $ariaInvalid }}" @endif
  @if(isset($ariaKeyshortcuts) && is_bool($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts @elseif(isset($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts="{{ $ariaKeyshortcuts }}" @endif
  @if(isset($ariaLabel) && is_bool($ariaLabel) && $ariaLabel) aria-label @elseif(isset($ariaLabel) && $ariaLabel) aria-label="{{ $ariaLabel }}" @endif
  @if(isset($ariaLabelledby) && is_bool($ariaLabelledby) && $ariaLabelledby) aria-labelledby @elseif(isset($ariaLabelledby) && $ariaLabelledby) aria-labelledby="{{ $ariaLabelledby }}" @endif
  @if(isset($ariaLive) && is_bool($ariaLive) && $ariaLive) aria-live @elseif(isset($ariaLive) && $ariaLive) aria-live="{{ $ariaLive }}" @endif
  @if(isset($ariaMultiselectable) && is_bool($ariaMultiselectable) && $ariaMultiselectable) aria-multiselectable @elseif(isset($ariaMultiselectable) && $ariaMultiselectable) aria-multiselectable="{{ $ariaMultiselectable }}" @endif
  @if(isset($ariaOrientation) && is_bool($ariaOrientation) && $ariaOrientation) aria-orientation @elseif(isset($ariaOrientation) && $ariaOrientation) aria-orientation="{{ $ariaOrientation }}" @endif
  @if(isset($ariaPlaceholder) && is_bool($ariaPlaceholder) && $ariaPlaceholder) aria-placeholder @elseif(isset($ariaPlaceholder) && $ariaPlaceholder) aria-placeholder="{{ $ariaPlaceholder }}" @endif
  @if(isset($ariaPressed) && is_bool($ariaPressed) && $ariaPressed) aria-pressed @elseif(isset($ariaPressed) && $ariaPressed) aria-pressed="{{ $ariaPressed }}" @endif
  @if(isset($ariaReadonly) && is_bool($ariaReadonly) && $ariaReadonly) aria-readonly @elseif(isset($ariaReadonly) && $ariaReadonly) aria-readonly="{{ $ariaReadonly }}" @endif
  @if(isset($ariaRelevant) && is_bool($ariaRelevant) && $ariaRelevant) aria-relevant @elseif(isset($ariaRelevant) && $ariaRelevant) aria-relevant="{{ $ariaRelevant }}" @endif
  @if(isset($ariaRequired) && is_bool($ariaRequired) && $ariaRequired) aria-required @elseif(isset($ariaRequired) && $ariaRequired) aria-required="{{ $ariaRequired }}" @endif
  @if(isset($ariaRoledescription) && is_bool($ariaRoledescription) && $ariaRoledescription) aria-roledescription @elseif(isset($ariaRoledescription) && $ariaRoledescription) aria-roledescription="{{ $ariaRoledescription }}" @endif
  @if(isset($autocapitalize) && is_bool($autocapitalize) && $autocapitalize) autocapitalize @elseif(isset($autocapitalize) && $autocapitalize) autocapitalize="{{ $autocapitalize }}" @endif
  @if(isset($autocomplete) && is_bool($autocomplete) && $autocomplete) autocomplete @elseif(isset($autocomplete) && $autocomplete) autocomplete="{{ $autocomplete }}" @endif
  @if(isset($autocorrect) && is_bool($autocorrect) && $autocorrect) autocorrect @elseif(isset($autocorrect) && $autocorrect) autocorrect="{{ $autocorrect }}" @endif
  @if(isset($autofocus) && is_bool($autofocus) && $autofocus) autofocus @elseif(isset($autofocus) && $autofocus) autofocus="{{ $autofocus }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($contenteditable) && is_bool($contenteditable) && $contenteditable) contenteditable @elseif(isset($contenteditable) && $contenteditable) contenteditable="{{ $contenteditable }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($disabled) && is_bool($disabled) && $disabled) disabled @elseif(isset($disabled) && $disabled) disabled="{{ $disabled }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($form) && is_bool($form) && $form) form @elseif(isset($form) && $form) form="{{ $form }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($inputmode) && is_bool($inputmode) && $inputmode) inputmode @elseif(isset($inputmode) && $inputmode) inputmode="{{ $inputmode }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($multiple) && is_bool($multiple) && $multiple) multiple @elseif(isset($multiple) && $multiple) multiple="{{ $multiple }}" @endif
  @if(isset($name) && is_bool($name) && $name) name @elseif(isset($name) && $name) name="{{ $name }}" @endif
  @if(isset($popover) && is_bool($popover) && $popover) popover @elseif(isset($popover) && $popover) popover="{{ $popover }}" @endif
  @if(isset($required) && is_bool($required) && $required) required @elseif(isset($required) && $required) required="{{ $required }}" @endif
  @if(isset($role) && is_bool($role) && $role) role @elseif(isset($role) && $role) role="{{ $role }}" @endif
  @if(isset($size) && is_bool($size) && $size) size @elseif(isset($size) && $size) size="{{ $size }}" @endif
  @if(isset($slot) && is_bool($slot) && $slot) slot @elseif(isset($slot) && $slot) slot="{{ $slot }}" @endif
  @if(isset($spellcheck) && is_bool($spellcheck) && $spellcheck) spellcheck @elseif(isset($spellcheck) && $spellcheck) spellcheck="{{ $spellcheck }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif>
  @yield('content')
</select>
@endsection

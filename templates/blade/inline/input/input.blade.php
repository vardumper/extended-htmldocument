{{--
  This file is auto-generated.

  @component input
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('input')
<input
  @if(isset($accept) && is_bool($accept) && $accept) accept @elseif(isset($accept) && $accept) accept="{{ $accept }}" @endif
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($alt) && is_bool($alt) && $alt) alt @elseif(isset($alt) && $alt) alt="{{ $alt }}" @endif
  @if(isset($ariaAtomic) && is_bool($ariaAtomic) && $ariaAtomic) aria-atomic @elseif(isset($ariaAtomic) && $ariaAtomic) aria-atomic="{{ $ariaAtomic }}" @endif
  @if(isset($ariaAutocomplete) && is_bool($ariaAutocomplete) && $ariaAutocomplete) aria-autocomplete @elseif(isset($ariaAutocomplete) && $ariaAutocomplete) aria-autocomplete="{{ $ariaAutocomplete }}" @endif
  @if(isset($ariaChecked) && is_bool($ariaChecked) && $ariaChecked) aria-checked @elseif(isset($ariaChecked) && $ariaChecked) aria-checked="{{ $ariaChecked }}" @endif
  @if(isset($ariaControls) && is_bool($ariaControls) && $ariaControls) aria-controls @elseif(isset($ariaControls) && $ariaControls) aria-controls="{{ $ariaControls }}" @endif
  @if(isset($ariaCurrent) && is_bool($ariaCurrent) && $ariaCurrent) aria-current @elseif(isset($ariaCurrent) && $ariaCurrent) aria-current="{{ $ariaCurrent }}" @endif
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
  @if(isset($ariaPlaceholder) && is_bool($ariaPlaceholder) && $ariaPlaceholder) aria-placeholder @elseif(isset($ariaPlaceholder) && $ariaPlaceholder) aria-placeholder="{{ $ariaPlaceholder }}" @endif
  @if(isset($ariaPressed) && is_bool($ariaPressed) && $ariaPressed) aria-pressed @elseif(isset($ariaPressed) && $ariaPressed) aria-pressed="{{ $ariaPressed }}" @endif
  @if(isset($ariaReadonly) && is_bool($ariaReadonly) && $ariaReadonly) aria-readonly @elseif(isset($ariaReadonly) && $ariaReadonly) aria-readonly="{{ $ariaReadonly }}" @endif
  @if(isset($ariaRelevant) && is_bool($ariaRelevant) && $ariaRelevant) aria-relevant @elseif(isset($ariaRelevant) && $ariaRelevant) aria-relevant="{{ $ariaRelevant }}" @endif
  @if(isset($ariaRequired) && is_bool($ariaRequired) && $ariaRequired) aria-required @elseif(isset($ariaRequired) && $ariaRequired) aria-required="{{ $ariaRequired }}" @endif
  @if(isset($ariaRoledescription) && is_bool($ariaRoledescription) && $ariaRoledescription) aria-roledescription @elseif(isset($ariaRoledescription) && $ariaRoledescription) aria-roledescription="{{ $ariaRoledescription }}" @endif
  @if(isset($ariaValuemax) && is_bool($ariaValuemax) && $ariaValuemax) aria-valuemax @elseif(isset($ariaValuemax) && $ariaValuemax) aria-valuemax="{{ $ariaValuemax }}" @endif
  @if(isset($ariaValuemin) && is_bool($ariaValuemin) && $ariaValuemin) aria-valuemin @elseif(isset($ariaValuemin) && $ariaValuemin) aria-valuemin="{{ $ariaValuemin }}" @endif
  @if(isset($ariaValuenow) && is_bool($ariaValuenow) && $ariaValuenow) aria-valuenow @elseif(isset($ariaValuenow) && $ariaValuenow) aria-valuenow="{{ $ariaValuenow }}" @endif
  @if(isset($ariaValuetext) && is_bool($ariaValuetext) && $ariaValuetext) aria-valuetext @elseif(isset($ariaValuetext) && $ariaValuetext) aria-valuetext="{{ $ariaValuetext }}" @endif
  @if(isset($autocapitalize) && is_bool($autocapitalize) && $autocapitalize) autocapitalize @elseif(isset($autocapitalize) && $autocapitalize) autocapitalize="{{ $autocapitalize }}" @endif
  @if(isset($autocomplete) && is_bool($autocomplete) && $autocomplete) autocomplete @elseif(isset($autocomplete) && $autocomplete) autocomplete="{{ $autocomplete }}" @endif
  @if(isset($autocorrect) && is_bool($autocorrect) && $autocorrect) autocorrect @elseif(isset($autocorrect) && $autocorrect) autocorrect="{{ $autocorrect }}" @endif
  @if(isset($autofocus) && is_bool($autofocus) && $autofocus) autofocus @elseif(isset($autofocus) && $autofocus) autofocus="{{ $autofocus }}" @endif
  @if(isset($checked) && is_bool($checked) && $checked) checked @elseif(isset($checked) && $checked) checked="{{ $checked }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($contenteditable) && is_bool($contenteditable) && $contenteditable) contenteditable @elseif(isset($contenteditable) && $contenteditable) contenteditable="{{ $contenteditable }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($dirname) && is_bool($dirname) && $dirname) dirname @elseif(isset($dirname) && $dirname) dirname="{{ $dirname }}" @endif
  @if(isset($disabled) && is_bool($disabled) && $disabled) disabled @elseif(isset($disabled) && $disabled) disabled="{{ $disabled }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($form) && is_bool($form) && $form) form @elseif(isset($form) && $form) form="{{ $form }}" @endif
  @if(isset($formaction) && is_bool($formaction) && $formaction) formaction @elseif(isset($formaction) && $formaction) formaction="{{ $formaction }}" @endif
  @if(isset($formenctype) && is_bool($formenctype) && $formenctype) formenctype @elseif(isset($formenctype) && $formenctype) formenctype="{{ $formenctype }}" @endif
  @if(isset($formmethod) && is_bool($formmethod) && $formmethod) formmethod @elseif(isset($formmethod) && $formmethod) formmethod="{{ $formmethod }}" @endif
  @if(isset($formnovalidate) && is_bool($formnovalidate) && $formnovalidate) formnovalidate @elseif(isset($formnovalidate) && $formnovalidate) formnovalidate="{{ $formnovalidate }}" @endif
  @if(isset($formtarget) && is_bool($formtarget) && $formtarget) formtarget @elseif(isset($formtarget) && $formtarget) formtarget="{{ $formtarget }}" @endif
  @if(isset($height) && is_bool($height) && $height) height @elseif(isset($height) && $height) height="{{ $height }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($inputmode) && is_bool($inputmode) && $inputmode) inputmode @elseif(isset($inputmode) && $inputmode) inputmode="{{ $inputmode }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($list) && is_bool($list) && $list) list @elseif(isset($list) && $list) list="{{ $list }}" @endif
  @if(isset($max) && is_bool($max) && $max) max @elseif(isset($max) && $max) max="{{ $max }}" @endif
  @if(isset($maxlength) && is_bool($maxlength) && $maxlength) maxlength @elseif(isset($maxlength) && $maxlength) maxlength="{{ $maxlength }}" @endif
  @if(isset($min) && is_bool($min) && $min) min @elseif(isset($min) && $min) min="{{ $min }}" @endif
  @if(isset($minlength) && is_bool($minlength) && $minlength) minlength @elseif(isset($minlength) && $minlength) minlength="{{ $minlength }}" @endif
  @if(isset($multiple) && is_bool($multiple) && $multiple) multiple @elseif(isset($multiple) && $multiple) multiple="{{ $multiple }}" @endif
  @if(isset($name) && is_bool($name) && $name) name @elseif(isset($name) && $name) name="{{ $name }}" @endif
  @if(isset($pattern) && is_bool($pattern) && $pattern) pattern @elseif(isset($pattern) && $pattern) pattern="{{ $pattern }}" @endif
  @if(isset($placeholder) && is_bool($placeholder) && $placeholder) placeholder @elseif(isset($placeholder) && $placeholder) placeholder="{{ $placeholder }}" @endif
  @if(isset($popovertarget) && is_bool($popovertarget) && $popovertarget) popovertarget @elseif(isset($popovertarget) && $popovertarget) popovertarget="{{ $popovertarget }}" @endif
  @if(isset($popovertargetaction) && is_bool($popovertargetaction) && $popovertargetaction) popovertargetaction @elseif(isset($popovertargetaction) && $popovertargetaction) popovertargetaction="{{ $popovertargetaction }}" @endif
  @if(isset($readonly) && is_bool($readonly) && $readonly) readonly @elseif(isset($readonly) && $readonly) readonly="{{ $readonly }}" @endif
  @if(isset($required) && is_bool($required) && $required) required @elseif(isset($required) && $required) required="{{ $required }}" @endif
  @if(isset($role) && is_bool($role) && $role) role @elseif(isset($role) && $role) role="{{ $role }}" @endif
  @if(isset($size) && is_bool($size) && $size) size @elseif(isset($size) && $size) size="{{ $size }}" @endif
  @if(isset($spellcheck) && is_bool($spellcheck) && $spellcheck) spellcheck @elseif(isset($spellcheck) && $spellcheck) spellcheck="{{ $spellcheck }}" @endif
  @if(isset($src) && is_bool($src) && $src) src @elseif(isset($src) && $src) src="{{ $src }}" @endif
  @if(isset($step) && is_bool($step) && $step) step @elseif(isset($step) && $step) step="{{ $step }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif
  @if(isset($value) && is_bool($value) && $value) value @elseif(isset($value) && $value) value="{{ $value }}" @endif
  @if(isset($width) && is_bool($width) && $width) width @elseif(isset($width) && $width) width="{{ $width }}" @endif />
@endsection

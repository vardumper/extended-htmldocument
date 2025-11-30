{{--
  This file is auto-generated.

  @component button
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('button')
<button
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($ariaAtomic) && is_bool($ariaAtomic) && $ariaAtomic) aria-atomic @elseif(isset($ariaAtomic) && $ariaAtomic) aria-atomic="{{ $ariaAtomic }}" @endif
  @if(isset($ariaBusy) && is_bool($ariaBusy) && $ariaBusy) aria-busy @elseif(isset($ariaBusy) && $ariaBusy) aria-busy="{{ $ariaBusy }}" @endif
  @if(isset($ariaChecked) && is_bool($ariaChecked) && $ariaChecked) aria-checked @elseif(isset($ariaChecked) && $ariaChecked) aria-checked="{{ $ariaChecked }}" @endif
  @if(isset($ariaControls) && is_bool($ariaControls) && $ariaControls) aria-controls @elseif(isset($ariaControls) && $ariaControls) aria-controls="{{ $ariaControls }}" @endif
  @if(isset($ariaCurrent) && is_bool($ariaCurrent) && $ariaCurrent) aria-current @elseif(isset($ariaCurrent) && $ariaCurrent) aria-current="{{ $ariaCurrent }}" @endif
  @if(isset($ariaDescribedby) && is_bool($ariaDescribedby) && $ariaDescribedby) aria-describedby @elseif(isset($ariaDescribedby) && $ariaDescribedby) aria-describedby="{{ $ariaDescribedby }}" @endif
  @if(isset($ariaDetails) && is_bool($ariaDetails) && $ariaDetails) aria-details @elseif(isset($ariaDetails) && $ariaDetails) aria-details="{{ $ariaDetails }}" @endif
  @if(isset($ariaDisabled) && is_bool($ariaDisabled) && $ariaDisabled) aria-disabled @elseif(isset($ariaDisabled) && $ariaDisabled) aria-disabled="{{ $ariaDisabled }}" @endif
  @if(isset($ariaExpanded) && is_bool($ariaExpanded) && $ariaExpanded) aria-expanded @elseif(isset($ariaExpanded) && $ariaExpanded) aria-expanded="{{ $ariaExpanded }}" @endif
  @if(isset($ariaHaspopup) && is_bool($ariaHaspopup) && $ariaHaspopup) aria-haspopup @elseif(isset($ariaHaspopup) && $ariaHaspopup) aria-haspopup="{{ $ariaHaspopup }}" @endif
  @if(isset($ariaKeyshortcuts) && is_bool($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts @elseif(isset($ariaKeyshortcuts) && $ariaKeyshortcuts) aria-keyshortcuts="{{ $ariaKeyshortcuts }}" @endif
  @if(isset($ariaLabel) && is_bool($ariaLabel) && $ariaLabel) aria-label @elseif(isset($ariaLabel) && $ariaLabel) aria-label="{{ $ariaLabel }}" @endif
  @if(isset($ariaLabelledby) && is_bool($ariaLabelledby) && $ariaLabelledby) aria-labelledby @elseif(isset($ariaLabelledby) && $ariaLabelledby) aria-labelledby="{{ $ariaLabelledby }}" @endif
  @if(isset($ariaLive) && is_bool($ariaLive) && $ariaLive) aria-live @elseif(isset($ariaLive) && $ariaLive) aria-live="{{ $ariaLive }}" @endif
  @if(isset($ariaPressed) && is_bool($ariaPressed) && $ariaPressed) aria-pressed @elseif(isset($ariaPressed) && $ariaPressed) aria-pressed="{{ $ariaPressed }}" @endif
  @if(isset($ariaRelevant) && is_bool($ariaRelevant) && $ariaRelevant) aria-relevant @elseif(isset($ariaRelevant) && $ariaRelevant) aria-relevant="{{ $ariaRelevant }}" @endif
  @if(isset($ariaRoledescription) && is_bool($ariaRoledescription) && $ariaRoledescription) aria-roledescription @elseif(isset($ariaRoledescription) && $ariaRoledescription) aria-roledescription="{{ $ariaRoledescription }}" @endif
  @if(isset($autocapitalize) && is_bool($autocapitalize) && $autocapitalize) autocapitalize @elseif(isset($autocapitalize) && $autocapitalize) autocapitalize="{{ $autocapitalize }}" @endif
  @if(isset($autocorrect) && is_bool($autocorrect) && $autocorrect) autocorrect @elseif(isset($autocorrect) && $autocorrect) autocorrect="{{ $autocorrect }}" @endif
  @if(isset($autofocus) && is_bool($autofocus) && $autofocus) autofocus @elseif(isset($autofocus) && $autofocus) autofocus="{{ $autofocus }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($command) && is_bool($command) && $command) command @elseif(isset($command) && $command) command="{{ $command }}" @endif
  @if(isset($commandfor) && is_bool($commandfor) && $commandfor) commandfor @elseif(isset($commandfor) && $commandfor) commandfor="{{ $commandfor }}" @endif
  @if(isset($contenteditable) && is_bool($contenteditable) && $contenteditable) contenteditable @elseif(isset($contenteditable) && $contenteditable) contenteditable="{{ $contenteditable }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($disabled) && is_bool($disabled) && $disabled) disabled @elseif(isset($disabled) && $disabled) disabled="{{ $disabled }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($form) && is_bool($form) && $form) form @elseif(isset($form) && $form) form="{{ $form }}" @endif
  @if(isset($formaction) && is_bool($formaction) && $formaction) formaction @elseif(isset($formaction) && $formaction) formaction="{{ $formaction }}" @endif
  @if(isset($formenctype) && is_bool($formenctype) && $formenctype) formenctype @elseif(isset($formenctype) && $formenctype) formenctype="{{ $formenctype }}" @endif
  @if(isset($formmethod) && is_bool($formmethod) && $formmethod) formmethod @elseif(isset($formmethod) && $formmethod) formmethod="{{ $formmethod }}" @endif
  @if(isset($formnovalidate) && is_bool($formnovalidate) && $formnovalidate) formnovalidate @elseif(isset($formnovalidate) && $formnovalidate) formnovalidate="{{ $formnovalidate }}" @endif
  @if(isset($formtarget) && is_bool($formtarget) && $formtarget) formtarget @elseif(isset($formtarget) && $formtarget) formtarget="{{ $formtarget }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($inputmode) && is_bool($inputmode) && $inputmode) inputmode @elseif(isset($inputmode) && $inputmode) inputmode="{{ $inputmode }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($name) && is_bool($name) && $name) name @elseif(isset($name) && $name) name="{{ $name }}" @endif
  @if(isset($popovertarget) && is_bool($popovertarget) && $popovertarget) popovertarget @elseif(isset($popovertarget) && $popovertarget) popovertarget="{{ $popovertarget }}" @endif
  @if(isset($popovertargetaction) && is_bool($popovertargetaction) && $popovertargetaction) popovertargetaction @elseif(isset($popovertargetaction) && $popovertargetaction) popovertargetaction="{{ $popovertargetaction }}" @endif
  @if(isset($role) && is_bool($role) && $role) role @elseif(isset($role) && $role) role="{{ $role }}" @endif
  @if(isset($slot) && is_bool($slot) && $slot) slot @elseif(isset($slot) && $slot) slot="{{ $slot }}" @endif
  @if(isset($spellcheck) && is_bool($spellcheck) && $spellcheck) spellcheck @elseif(isset($spellcheck) && $spellcheck) spellcheck="{{ $spellcheck }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif
  @if(isset($type) && is_bool($type) && $type) type @elseif(isset($type) && $type) type="{{ $type }}" @endif
  @if(isset($value) && is_bool($value) && $value) value @elseif(isset($value) && $value) value="{{ $value }}" @endif>
  @yield('content')
</button>
@endsection

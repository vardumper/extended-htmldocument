{{--
  This file is auto-generated.

  @component body
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('body')
<body
  @if(isset($accesskey) && is_bool($accesskey) && $accesskey) accesskey @elseif(isset($accesskey) && $accesskey) accesskey="{{ $accesskey }}" @endif
  @if(isset($class) && is_bool($class) && $class) class @elseif(isset($class) && $class) class="{{ $class }}" @endif
  @if(isset($dir) && is_bool($dir) && $dir) dir @elseif(isset($dir) && $dir) dir="{{ $dir }}" @endif
  @if(isset($draggable) && is_bool($draggable) && $draggable) draggable @elseif(isset($draggable) && $draggable) draggable="{{ $draggable }}" @endif
  @if(isset($hidden) && is_bool($hidden) && $hidden) hidden @elseif(isset($hidden) && $hidden) hidden="{{ $hidden }}" @endif
  @if(isset($id) && is_bool($id) && $id) id @elseif(isset($id) && $id) id="{{ $id }}" @endif
  @if(isset($lang) && is_bool($lang) && $lang) lang @elseif(isset($lang) && $lang) lang="{{ $lang }}" @endif
  @if(isset($onafterprint) && is_bool($onafterprint) && $onafterprint) onafterprint @elseif(isset($onafterprint) && $onafterprint) onafterprint="{{ $onafterprint }}" @endif
  @if(isset($onbeforeprint) && is_bool($onbeforeprint) && $onbeforeprint) onbeforeprint @elseif(isset($onbeforeprint) && $onbeforeprint) onbeforeprint="{{ $onbeforeprint }}" @endif
  @if(isset($onbeforeunload) && is_bool($onbeforeunload) && $onbeforeunload) onbeforeunload @elseif(isset($onbeforeunload) && $onbeforeunload) onbeforeunload="{{ $onbeforeunload }}" @endif
  @if(isset($onhashchange) && is_bool($onhashchange) && $onhashchange) onhashchange @elseif(isset($onhashchange) && $onhashchange) onhashchange="{{ $onhashchange }}" @endif
  @if(isset($onlanguagechange) && is_bool($onlanguagechange) && $onlanguagechange) onlanguagechange @elseif(isset($onlanguagechange) && $onlanguagechange) onlanguagechange="{{ $onlanguagechange }}" @endif
  @if(isset($onmessage) && is_bool($onmessage) && $onmessage) onmessage @elseif(isset($onmessage) && $onmessage) onmessage="{{ $onmessage }}" @endif
  @if(isset($onmessageerror) && is_bool($onmessageerror) && $onmessageerror) onmessageerror @elseif(isset($onmessageerror) && $onmessageerror) onmessageerror="{{ $onmessageerror }}" @endif
  @if(isset($onoffline) && is_bool($onoffline) && $onoffline) onoffline @elseif(isset($onoffline) && $onoffline) onoffline="{{ $onoffline }}" @endif
  @if(isset($ononline) && is_bool($ononline) && $ononline) ononline @elseif(isset($ononline) && $ononline) ononline="{{ $ononline }}" @endif
  @if(isset($onpagehide) && is_bool($onpagehide) && $onpagehide) onpagehide @elseif(isset($onpagehide) && $onpagehide) onpagehide="{{ $onpagehide }}" @endif
  @if(isset($onpageshow) && is_bool($onpageshow) && $onpageshow) onpageshow @elseif(isset($onpageshow) && $onpageshow) onpageshow="{{ $onpageshow }}" @endif
  @if(isset($onpopstate) && is_bool($onpopstate) && $onpopstate) onpopstate @elseif(isset($onpopstate) && $onpopstate) onpopstate="{{ $onpopstate }}" @endif
  @if(isset($onrejectionhandled) && is_bool($onrejectionhandled) && $onrejectionhandled) onrejectionhandled @elseif(isset($onrejectionhandled) && $onrejectionhandled) onrejectionhandled="{{ $onrejectionhandled }}" @endif
  @if(isset($onstorage) && is_bool($onstorage) && $onstorage) onstorage @elseif(isset($onstorage) && $onstorage) onstorage="{{ $onstorage }}" @endif
  @if(isset($onunhandledrejection) && is_bool($onunhandledrejection) && $onunhandledrejection) onunhandledrejection @elseif(isset($onunhandledrejection) && $onunhandledrejection) onunhandledrejection="{{ $onunhandledrejection }}" @endif
  @if(isset($onunload) && is_bool($onunload) && $onunload) onunload @elseif(isset($onunload) && $onunload) onunload="{{ $onunload }}" @endif
  @if(isset($style) && is_bool($style) && $style) style @elseif(isset($style) && $style) style="{{ $style }}" @endif
  @if(isset($tabindex) && is_bool($tabindex) && $tabindex) tabindex @elseif(isset($tabindex) && $tabindex) tabindex="{{ $tabindex }}" @endif
  @if(isset($title) && is_bool($title) && $title) title @elseif(isset($title) && $title) title="{{ $title }}" @endif
  @if(isset($translate) && is_bool($translate) && $translate) translate @elseif(isset($translate) && $translate) translate="{{ $translate }}" @endif>
  @yield('content')
</body>
@endsection

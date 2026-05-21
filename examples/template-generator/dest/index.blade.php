{{--
  This file is auto-generated.

  Strict mode: include

  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php(ob_start())
  @php(ob_start())
    @php(ob_start())
      {{ entry.title }}
    $__bladeContent1 = ob_get_clean();
    @endphp
    @include('blade.block.h3', ['content' => $__bladeContent1])
    @php(ob_start())
      {{ entry.subtitle }}
    $__bladeContent2 = ob_get_clean();
    @endphp
    @include('blade.block.h4', ['content' => $__bladeContent2])
  $__bladeContent3 = ob_get_clean();
  @endphp
  @include('blade.block.hgroup', ['content' => $__bladeContent3])
  @php(ob_start())
    {{ entry.description }}
  $__bladeContent4 = ob_get_clean();
  @endphp
  @include('blade.block.p', ['content' => $__bladeContent4])
  @include('blade.inline.img', ['src' => '{{ entry.image.src }}', 'alt' => '{{ entry.image.alt }}', 'width' => '{{ entry.image.width }}', 'height' => '{{ entry.image.height }}'])
  @php(ob_start())
    {{ entry.button.text }}
  $__bladeContent5 = ob_get_clean();
  @endphp
  @include('blade.inline.a', ['role' => 'button', 'href' => '{{ entry.button.href }}', 'content' => $__bladeContent5])
$__bladeContent6 = ob_get_clean();
@endphp
@include('blade.block.div', ['class' => 'teaser', 'content' => $__bladeContent6])

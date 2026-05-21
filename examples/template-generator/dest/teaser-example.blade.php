{{--
  This file is auto-generated.

  @see src/TemplateGenerator/BladeComponentGenerator.php
--}}
<x-block.div class="teaser">
  <x-block.hgroup>
    <x-block.h3>
      {{ entry.title }}
    </x-block.h3>
    <x-block.h4>
      {{ entry.subtitle }}
    </x-block.h4>
  </x-block.hgroup>
  <x-block.p>
    {{ entry.description }}
  </x-block.p>
  <x-inline.img src="{{ entry.image.src }}" alt="{{ entry.image.alt }}" width="{{ entry.image.width }}" height="{{ entry.image.height }}" />
  <x-inline.a role="button" href="{{ entry.button.href }}">
    {{ entry.button.text }}
  </x-inline.a>
</x-block.div>

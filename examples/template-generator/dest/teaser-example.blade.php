{{--
  This file is auto-generated.

  @see src/TemplateGenerator/BladeComponentGenerator.php
--}}
<x-block.div.div class="teaser">
  <x-block.hgroup.hgroup>
    <x-block.h3.h3>
      {{ title }}
    </x-block.h3.h3>
    <x-block.h4.h4>
      {{ subtitle }}
    </x-block.h4.h4>
  </x-block.hgroup.hgroup>
  <x-block.p.p>
    {{ description }}
  </x-block.p.p>
  <x-inline.img.img src="{{ image_url }}" alt="{{ image_alt }}" />
  <x-inline.a.a role="button" href="{{ url }}">
    {{ 'Read more'|t }}
  </x-inline.a.a>
</x-block.div.div>

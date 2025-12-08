<?php

namespace App\Twig\Components;

use Html\Enum\CrossoriginEnum;
use Html\Enum\PreloadEnum;
use Html\Enum\RoleEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\SpellCheckEnum;
use Html\Enum\TranslateEnum;
use Html\Enum\PopoverEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Video - The video element is used to embed video content in a document, such as a movie clip or other video streams.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Video')]
class Video
{
    public ?bool $autoplay = null;
    public ?bool $controls = null;
    public ?Html\Enum\CrossoriginEnum $crossorigin = null;
    public ?string $height = null;
    public ?bool $loop = null;
    public ?bool $muted = null;
    public ?string $poster = null;
    public ?Html\Enum\PreloadEnum $preload = null;
    public ?string $src = null;
    public ?string $width = null;
    public ?Html\Enum\RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?Html\Enum\AriaBusyEnum $ariaBusy = null;
    public ?Html\Enum\AriaHiddenEnum $ariaHidden = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?Html\Enum\AriaLiveEnum $ariaLive = null;
    public ?Html\Enum\AriaRelevantEnum $ariaRelevant = null;
    public ?Html\Enum\AriaAtomicEnum $ariaAtomic = null;
    public ?string $accesskey = null;
    public ?Html\Enum\AutoCapitalizeEnum $autocapitalize = null;
    public ?bool $autofocus = null;
    public ?Html\Enum\ContentEditableEnum $contenteditable = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?Html\Enum\InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?string $slot = null;
    public ?Html\Enum\SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?Html\Enum\TranslateEnum $translate = null;
    public ?Html\Enum\PopoverEnum $popover = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('autoplay', ['null', 'string']);
        $resolver->setAllowedTypes('controls', ['null', 'string']);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('height', ['null', 'string']);
        $resolver->setAllowedTypes('loop', ['null', 'string']);
        $resolver->setAllowedTypes('muted', ['null', 'string']);
        $resolver->setAllowedTypes('poster', ['null', 'string']);
        $resolver->setAllowedTypes('preload', ['null', 'string', PreloadEnum::class]);
        $resolver->setNormalizer('preload', function ($options, $value) {
            if (is_string($value)) {
                return PreloadEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('src', ['null', 'string']);
        $resolver->setAllowedTypes('width', ['null', 'string']);
        $resolver->setAllowedTypes('role', ['null', 'string', RoleEnum::class]);
        $resolver->setNormalizer('role', function ($options, $value) {
            if (is_string($value)) {
                return RoleEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaControls', ['null', 'string']);
        $resolver->setAllowedTypes('ariaDescribedby', ['null', 'string']);
        $resolver->setAllowedTypes('ariaLabelledby', ['null', 'string']);
        $resolver->setAllowedTypes('ariaBusy', ['null', 'string', AriaBusyEnum::class]);
        $resolver->setNormalizer('ariaBusy', function ($options, $value) {
            if (is_string($value)) {
                return AriaBusyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaHidden', ['null', 'string', AriaHiddenEnum::class]);
        $resolver->setNormalizer('ariaHidden', function ($options, $value) {
            if (is_string($value)) {
                return AriaHiddenEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaDetails', ['null', 'string']);
        $resolver->setAllowedTypes('ariaKeyshortcuts', ['null', 'string']);
        $resolver->setAllowedTypes('ariaRoledescription', ['null', 'string']);
        $resolver->setAllowedTypes('ariaLive', ['null', 'string', AriaLiveEnum::class]);
        $resolver->setNormalizer('ariaLive', function ($options, $value) {
            if (is_string($value)) {
                return AriaLiveEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaRelevant', ['null', 'string', AriaRelevantEnum::class]);
        $resolver->setNormalizer('ariaRelevant', function ($options, $value) {
            if (is_string($value)) {
                return AriaRelevantEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaAtomic', ['null', 'string', AriaAtomicEnum::class]);
        $resolver->setNormalizer('ariaAtomic', function ($options, $value) {
            if (is_string($value)) {
                return AriaAtomicEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('accesskey', ['null', 'string']);
        $resolver->setAllowedTypes('autocapitalize', ['null', 'string', AutoCapitalizeEnum::class]);
        $resolver->setNormalizer('autocapitalize', function ($options, $value) {
            if (is_string($value)) {
                return AutoCapitalizeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('autofocus', ['null', 'string']);
        $resolver->setAllowedTypes('contenteditable', ['null', 'string', ContentEditableEnum::class]);
        $resolver->setNormalizer('contenteditable', function ($options, $value) {
            if (is_string($value)) {
                return ContentEditableEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('draggable', ['null', 'string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('inputmode', ['null', 'string', InputModeEnum::class]);
        $resolver->setNormalizer('inputmode', function ($options, $value) {
            if (is_string($value)) {
                return InputModeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('slot', ['null', 'string']);
        $resolver->setAllowedTypes('spellcheck', ['null', 'string', SpellCheckEnum::class]);
        $resolver->setNormalizer('spellcheck', function ($options, $value) {
            if (is_string($value)) {
                return SpellCheckEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('style', ['null', 'string']);
        $resolver->setAllowedTypes('tabindex', ['null', 'string']);
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('translate', ['null', 'string', TranslateEnum::class]);
        $resolver->setNormalizer('translate', function ($options, $value) {
            if (is_string($value)) {
                return TranslateEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('popover', ['null', 'string', PopoverEnum::class]);
        $resolver->setNormalizer('popover', function ($options, $value) {
            if (is_string($value)) {
                return PopoverEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}

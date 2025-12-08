<?php

namespace App\Twig\Components;

use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
use Html\Enum\ARoleEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaExpandedEnum;
use Html\Enum\AriaHaspopupEnum;
use Html\Enum\AriaPressedEnum;
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
 * Anchor - The a element represents a hyperlink, linking to another resource.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('A')]
class A
{
    public ?string $download = null;
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?Html\Enum\RelEnum $rel = null;
    public ?Html\Enum\TargetEnum $target = null;
    public ?string $type = null;
    public ?Html\Enum\ARoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?Html\Enum\AriaCurrentEnum $ariaCurrent = null;
    public ?Html\Enum\AriaBusyEnum $ariaBusy = null;
    public ?string $ariaLabel = null;
    public ?Html\Enum\AriaDisabledEnum $ariaDisabled = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?Html\Enum\AriaLiveEnum $ariaLive = null;
    public ?Html\Enum\AriaRelevantEnum $ariaRelevant = null;
    public ?Html\Enum\AriaAtomicEnum $ariaAtomic = null;
    public ?Html\Enum\AriaExpandedEnum $ariaExpanded = null;
    public ?Html\Enum\AriaHaspopupEnum $ariaHaspopup = null;
    public ?Html\Enum\AriaPressedEnum $ariaPressed = null;
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

        $resolver->setAllowedTypes('download', ['null', 'string']);
        $resolver->setAllowedTypes('href', ['null', 'string']);
        $resolver->setAllowedTypes('hreflang', ['null', 'string']);
        $resolver->setAllowedTypes('rel', ['null', 'string', RelEnum::class]);
        $resolver->setNormalizer('rel', function ($options, $value) {
            if (is_string($value)) {
                return RelEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('target', ['null', 'string', TargetEnum::class]);
        $resolver->setNormalizer('target', function ($options, $value) {
            if (is_string($value)) {
                return TargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('type', ['null', 'string']);
        $resolver->setAllowedTypes('role', ['null', 'string', ARoleEnum::class]);
        $resolver->setNormalizer('role', function ($options, $value) {
            if (is_string($value)) {
                return ARoleEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaControls', ['null', 'string']);
        $resolver->setAllowedTypes('ariaDescribedby', ['null', 'string']);
        $resolver->setAllowedTypes('ariaLabelledby', ['null', 'string']);
        $resolver->setAllowedTypes('ariaCurrent', ['null', 'string', AriaCurrentEnum::class]);
        $resolver->setNormalizer('ariaCurrent', function ($options, $value) {
            if (is_string($value)) {
                return AriaCurrentEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaBusy', ['null', 'string', AriaBusyEnum::class]);
        $resolver->setNormalizer('ariaBusy', function ($options, $value) {
            if (is_string($value)) {
                return AriaBusyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaLabel', ['null', 'string']);
        $resolver->setAllowedTypes('ariaDisabled', ['null', 'string', AriaDisabledEnum::class]);
        $resolver->setNormalizer('ariaDisabled', function ($options, $value) {
            if (is_string($value)) {
                return AriaDisabledEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('ariaExpanded', ['null', 'string', AriaExpandedEnum::class]);
        $resolver->setNormalizer('ariaExpanded', function ($options, $value) {
            if (is_string($value)) {
                return AriaExpandedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaHaspopup', ['null', 'string', AriaHaspopupEnum::class]);
        $resolver->setNormalizer('ariaHaspopup', function ($options, $value) {
            if (is_string($value)) {
                return AriaHaspopupEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaPressed', ['null', 'string', AriaPressedEnum::class]);
        $resolver->setNormalizer('ariaPressed', function ($options, $value) {
            if (is_string($value)) {
                return AriaPressedEnum::tryFrom($value);
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

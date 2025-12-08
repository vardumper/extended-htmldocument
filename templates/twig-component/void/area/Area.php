<?php

namespace App\Twig\Components;

use Html\Enum\RelEnum;
use Html\Enum\ShapeEnum;
use Html\Enum\TargetEnum;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\SpellCheckEnum;
use Html\Enum\TranslateEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Area')]
class Area
{
    public ?string $alt = null;
    public ?string $coords = null;
    public ?string $download = null;
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?Html\Enum\RelEnum $rel = null;
    public ?Html\Enum\ShapeEnum $shape = null;
    public ?Html\Enum\TargetEnum $target = null;
    public ?string $type = null;
    public ?string $accesskey = null;
    public ?Html\Enum\AutoCapitalizeEnum $autocapitalize = null;
    public ?bool $autofocus = null;
    public ?Html\Enum\ContentEditableEnum $contenteditable = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?Html\Enum\InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?Html\Enum\SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?Html\Enum\TranslateEnum $translate = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('alt', ['null', 'string']);
        $resolver->setAllowedTypes('coords', ['null', 'string']);
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
        $resolver->setAllowedTypes('shape', ['null', 'string', ShapeEnum::class]);
        $resolver->setNormalizer('shape', function ($options, $value) {
            if (is_string($value)) {
                return ShapeEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}

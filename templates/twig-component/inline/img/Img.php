<?php

namespace App\Twig\Components;

use Html\Enum\CrossoriginEnum;
use Html\Enum\DecodingEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\DirectionEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Image - The img element represents an image.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Img')]
class Img
{
    public ?string $alt = null;
    public ?Html\Enum\CrossoriginEnum $crossorigin = null;
    public ?Html\Enum\DecodingEnum $decoding = null;
    public ?string $height = null;
    public ?bool $ismap = null;
    public ?Html\Enum\ReferrerpolicyEnum $referrerpolicy = null;
    public ?string $sizes = null;
    public ?string $src = null;
    public ?string $srcset = null;
    public ?string $usemap = null;
    public ?string $width = null;
    public ?Html\Enum\AriaHiddenEnum $ariaHidden = null;
    public ?string $ariaLabel = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?Html\Enum\AriaLiveEnum $ariaLive = null;
    public ?Html\Enum\AriaRelevantEnum $ariaRelevant = null;
    public ?Html\Enum\AriaAtomicEnum $ariaAtomic = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?string $lang = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('alt', ['null', 'string']);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('decoding', ['null', 'string', DecodingEnum::class]);
        $resolver->setNormalizer('decoding', function ($options, $value) {
            if (is_string($value)) {
                return DecodingEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('height', ['null', 'string']);
        $resolver->setAllowedTypes('ismap', ['null', 'string']);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('sizes', ['null', 'string']);
        $resolver->setAllowedTypes('src', ['null', 'string']);
        $resolver->setAllowedTypes('srcset', ['null', 'string']);
        $resolver->setAllowedTypes('usemap', ['null', 'string']);
        $resolver->setAllowedTypes('width', ['null', 'string']);
        $resolver->setAllowedTypes('ariaHidden', ['null', 'string', AriaHiddenEnum::class]);
        $resolver->setNormalizer('ariaHidden', function ($options, $value) {
            if (is_string($value)) {
                return AriaHiddenEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaLabel', ['null', 'string']);
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
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('draggable', ['null', 'string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('style', ['null', 'string']);
        $resolver->setAllowedTypes('tabindex', ['null', 'string']);
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}

<?php

namespace App\Twig\Components;

use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\FormEnctypeEnum;
use Html\Enum\FormMethodEnum;
use Html\Enum\FormTargetEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\TranslateEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Form')]
class Form
{
    public ?string $acceptCharset = null;
    public ?string $action = null;
    public ?Html\Enum\AutocompleteEnum $autocomplete = null;
    public ?Html\Enum\AutocorrectEnum $autocorrect = null;
    public ?Html\Enum\FormEnctypeEnum $enctype = null;
    public ?Html\Enum\FormMethodEnum $method = null;
    public ?string $name = null;
    public ?bool $novalidate = null;
    public ?Html\Enum\FormTargetEnum $target = null;
    public ?Html\Enum\AriaInvalidEnum $ariaInvalid = null;
    public ?string $ariaLabel = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?Html\Enum\AriaLiveEnum $ariaLive = null;
    public ?Html\Enum\AriaRelevantEnum $ariaRelevant = null;
    public ?Html\Enum\AriaAtomicEnum $ariaAtomic = null;
    public ?string $accesskey = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?string $lang = null;
    public ?string $slot = null;
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

        $resolver->setAllowedTypes('acceptCharset', ['null', 'string']);
        $resolver->setAllowedTypes('action', ['null', 'string']);
        $resolver->setAllowedTypes('autocomplete', ['null', 'string', AutocompleteEnum::class]);
        $resolver->setNormalizer('autocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('enctype', ['null', 'string', FormEnctypeEnum::class]);
        $resolver->setNormalizer('enctype', function ($options, $value) {
            if (is_string($value)) {
                return FormEnctypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('method', ['null', 'string', FormMethodEnum::class]);
        $resolver->setNormalizer('method', function ($options, $value) {
            if (is_string($value)) {
                return FormMethodEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('name', ['null', 'string']);
        $resolver->setAllowedTypes('novalidate', ['null', 'string']);
        $resolver->setAllowedTypes('target', ['null', 'string', FormTargetEnum::class]);
        $resolver->setNormalizer('target', function ($options, $value) {
            if (is_string($value)) {
                return FormTargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaInvalid', ['null', 'string', AriaInvalidEnum::class]);
        $resolver->setNormalizer('ariaInvalid', function ($options, $value) {
            if (is_string($value)) {
                return AriaInvalidEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('accesskey', ['null', 'string']);
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
        $resolver->setAllowedTypes('slot', ['null', 'string']);
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

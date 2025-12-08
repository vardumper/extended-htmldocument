<?php

namespace App\Twig\Components;

use Html\Enum\AutocorrectEnum;
use Html\Enum\ButtonTypeEnum;
use Html\Enum\FormenctypeEnum;
use Html\Enum\FormmethodEnum;
use Html\Enum\FormtargetEnum;
use Html\Enum\PopovertargetactionEnum;
use Html\Enum\RoleEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaExpandedEnum;
use Html\Enum\AriaHaspopupEnum;
use Html\Enum\AriaPressedEnum;
use Html\Enum\AriaCheckedEnum;
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
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Button')]
class Button
{
    public ?Html\Enum\AutocorrectEnum $autocorrect = null;
    public ?bool $disabled = null;
    public ?string $name = null;
    public ?Html\Enum\ButtonTypeEnum $type = null;
    public ?string $value = null;
    public ?string $form = null;
    public ?string $formaction = null;
    public ?Html\Enum\FormenctypeEnum $formenctype = null;
    public ?Html\Enum\FormmethodEnum $formmethod = null;
    public ?bool $formnovalidate = null;
    public ?Html\Enum\FormtargetEnum $formtarget = null;
    public ?string $popovertarget = null;
    public ?Html\Enum\PopovertargetactionEnum $popovertargetaction = null;
    public ?string $command = null;
    public ?string $commandfor = null;
    public ?Html\Enum\RoleEnum $role = null;
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
    public ?Html\Enum\AriaCheckedEnum $ariaChecked = null;
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
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('disabled', ['null', 'string']);
        $resolver->setAllowedTypes('name', ['null', 'string']);
        $resolver->setAllowedTypes('type', ['null', 'string', ButtonTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return ButtonTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('value', ['null', 'string']);
        $resolver->setAllowedTypes('form', ['null', 'string']);
        $resolver->setAllowedTypes('formaction', ['null', 'string']);
        $resolver->setAllowedTypes('formenctype', ['null', 'string', FormenctypeEnum::class]);
        $resolver->setNormalizer('formenctype', function ($options, $value) {
            if (is_string($value)) {
                return FormenctypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('formmethod', ['null', 'string', FormmethodEnum::class]);
        $resolver->setNormalizer('formmethod', function ($options, $value) {
            if (is_string($value)) {
                return FormmethodEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('formnovalidate', ['null', 'string']);
        $resolver->setAllowedTypes('formtarget', ['null', 'string', FormtargetEnum::class]);
        $resolver->setNormalizer('formtarget', function ($options, $value) {
            if (is_string($value)) {
                return FormtargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('popovertarget', ['null', 'string']);
        $resolver->setAllowedTypes('popovertargetaction', ['null', 'string', PopovertargetactionEnum::class]);
        $resolver->setNormalizer('popovertargetaction', function ($options, $value) {
            if (is_string($value)) {
                return PopovertargetactionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('command', ['null', 'string']);
        $resolver->setAllowedTypes('commandfor', ['null', 'string']);
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
        $resolver->setAllowedTypes('ariaChecked', ['null', 'string', AriaCheckedEnum::class]);
        $resolver->setNormalizer('ariaChecked', function ($options, $value) {
            if (is_string($value)) {
                return AriaCheckedEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}

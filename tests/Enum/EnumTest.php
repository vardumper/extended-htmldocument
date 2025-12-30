<?php

declare(strict_types=1);

test('enum functionality', function () {
    $enums = [
        \Html\Enum\AlignEnum::class,
        \Html\Enum\ARoleEnum::class,
        \Html\Enum\AriaAtomicEnum::class,
        \Html\Enum\AriaAutocompleteEnum::class,
        \Html\Enum\AriaBusyEnum::class,
        \Html\Enum\AriaCheckedEnum::class,
        \Html\Enum\AriaCurrentEnum::class,
        \Html\Enum\AriaDisabledEnum::class,
        \Html\Enum\AriaExpandedEnum::class,
        \Html\Enum\AriaHaspopupEnum::class,
        \Html\Enum\AriaHiddenEnum::class,
        \Html\Enum\AriaInvalidEnum::class,
        \Html\Enum\AriaLabelEnum::class,
        \Html\Enum\AriaLiveEnum::class,
        \Html\Enum\AriaModalEnum::class,
        \Html\Enum\AriaMultilineEnum::class,
        \Html\Enum\AriaMultiselectableEnum::class,
        \Html\Enum\AriaOrientationEnum::class,
        \Html\Enum\AriaPressedEnum::class,
        \Html\Enum\AriaReadonlyEnum::class,
        \Html\Enum\AriaRelevantEnum::class,
        \Html\Enum\AriaRequiredEnum::class,
        \Html\Enum\AriaSelectedEnum::class,
        \Html\Enum\AriaSortEnum::class,
        \Html\Enum\AutoCapitalizeEnum::class,
        \Html\Enum\AutocompleteEnum::class,
        \Html\Enum\AutocorrectEnum::class,
        \Html\Enum\ButtonTypeEnum::class,
        \Html\Enum\ClassEnum::class,
        \Html\Enum\ContentEditableEnum::class,
        \Html\Enum\CrossoriginEnum::class,
        \Html\Enum\DecodingEnum::class,
        \Html\Enum\DirectionEnum::class,
        \Html\Enum\EnctypeEnum::class,
        \Html\Enum\FormenctypeEnum::class,
        \Html\Enum\FormmethodEnum::class,
        \Html\Enum\FormtargetEnum::class,
        \Html\Enum\HrAlignEnum::class,
        \Html\Enum\HttpEquivEnum::class,
        \Html\Enum\InputModeEnum::class,
        \Html\Enum\InputTypeEnum::class,
        \Html\Enum\KindEnum::class,
        \Html\Enum\LinkRelEnum::class,
        \Html\Enum\MethodEnum::class,
        \Html\Enum\OlTypeEnum::class,
        \Html\Enum\PopoverEnum::class,
        \Html\Enum\PopovertargetactionEnum::class,
        \Html\Enum\PreloadEnum::class,
        \Html\Enum\ReferrerpolicyEnum::class,
        \Html\Enum\RelEnum::class,
        \Html\Enum\RoleEnum::class,
        \Html\Enum\ScriptTypeEnum::class,
        \Html\Enum\ShapeEnum::class,
        \Html\Enum\SpellCheckEnum::class,
        \Html\Enum\StyleTypeEnum::class,
        \Html\Enum\TargetEnum::class,
        \Html\Enum\TrAlignEnum::class,
        \Html\Enum\TranslateEnum::class,
        \Html\Enum\TypeButtonEnum::class,
        \Html\Enum\TypeInputEnum::class,
        \Html\Enum\TypeOlEnum::class,
        \Html\Enum\TypeScriptEnum::class,
        \Html\Enum\TypeStyleEnum::class,
        \Html\Enum\ValignEnum::class,
        \Html\Enum\WrapEnum::class,
    ];

    foreach ($enums as $enum) {
        $obj = $enum::cases()[0];
        expect(class_exists($enum))
            ->toBeTrue();
        expect($obj)
            ->toBeInstanceOf($enum);
        expect(is_subclass_of($enum, BackedEnum::class))->toBeTrue();
        expect($enum::getQualifiedName())->toBeString();

        if (\method_exists($enum, 'getDefault')) {
            expect($enum::getDefault())->toBeInstanceOf($enum);
        }
    }
});

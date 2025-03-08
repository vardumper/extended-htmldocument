<?php

declare(strict_types=1);

test('enum functionality', function () {
    $enums = [
        \Html\Enum\AlignEnum::class,
        \Html\Enum\AutoCapitalizeEnum::class,
        \Html\Enum\AutocompleteEnum::class,
        \Html\Enum\ClearEnum::class,
        \Html\Enum\CrossoriginEnum::class,
        \Html\Enum\DecodingEnum::class,
        \Html\Enum\EnctypeEnum::class,
        \Html\Enum\HttpEquivEnum::class,
        \Html\Enum\InputModeEnum::class,
        \Html\Enum\KindEnum::class,
        \Html\Enum\MethodEnum::class,
        \Html\Enum\PreloadEnum::class,
        \Html\Enum\ReferrerpolicyEnum::class,
        \Html\Enum\RelEnum::class,
        \Html\Enum\ShapeEnum::class,
        \Html\Enum\TargetEnum::class,
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
        expect(is_subclass_of($enum, BackedEnum::class))->toBeTrue();
        expect($enum::getQualifiedName())->toBeString();

        // $this->assertSame($enum::cases()[0], $enum::cases()[0]::cases()[0]);
    }
});

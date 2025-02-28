<?php

declare(strict_types=1);

namespace Tests\Delegator;

use BackedEnum;
use PHPUnit\Framework\TestCase;

final class EnumTest extends TestCase
{
    public function testEnumFunctionality()
    {
        $enums = [
            \Html\Enum\AlignEnum::class,
            \Html\Enum\AutocompleteEnum::class,
            \Html\Enum\ClearEnum::class,
            \Html\Enum\CrossoriginEnum::class,
            \Html\Enum\DecodingEnum::class,
            \Html\Enum\EnctypeEnum::class,
            \Html\Enum\HttpEquivEnum::class,
            \Html\Enum\KindEnum::class,
            \Html\Enum\MethodEnum::class,
            \Html\Enum\PreloadEnum::class,
            \Html\Enum\ReferrerpolicyEnum::class,
            \Html\Enum\RelEnum::class,
            \Html\Enum\ShapeEnum::class,
            \Html\Enum\TargetEnum::class,
            \Html\Enum\TypeEnum::class,
            \Html\Enum\ValignEnum::class,
            \Html\Enum\WrapEnum::class,
        ];

        foreach ($enums as $enum) {
            $obj = $enum::cases()[0];
            $this->assertTrue(class_exists($enum));
            $this->assertTrue(is_subclass_of($enum, BackedEnum::class));
            $this->assertIsString($enum::getQualifiedName());

            // $this->assertSame($enum::cases()[0], $enum::cases()[0]::cases()[0]);
        }
    }
}

<?php

declare(strict_types=1);

namespace Unit\Domain\Trait;

use Antoinebonin\Matomo\Domain\Trait\ValidateUrlTrait;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ValiderUrlTraitTest extends TestCase
{
    use ValidateUrlTrait;

    public function testValiderUrl(): void
    {
        self::assertTrue($this->validerURL('https://google.fr'));
    }

    /**
     * @dataProvider provideValiderUrlErrorCases
     */
    public function testValiderUrlError(string $url): void
    {
        self::assertFalse($this->validerURL($url));
    }

    /**
     * @return array<int, array<int, string>>
     */
    public static function provideValiderUrlErrorCases(): array
    {
        return [
            ['https://.fr'],
            ['google.fr'],
            ['https://google'],
        ];
    }
}

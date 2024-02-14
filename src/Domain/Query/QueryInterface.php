<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Query;

interface QueryInterface
{
    public function getMethod(): string;

    public function getUrl(): string;

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array;
}

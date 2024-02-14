<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Response;

class Response
{
    public function __construct(
        public readonly mixed $data,
        public readonly int $statusCode
    ) {}
}

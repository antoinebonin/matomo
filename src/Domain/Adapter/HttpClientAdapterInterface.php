<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Adapter;

use Antoinebonin\Matomo\Domain\Query\QueryInterface;
use Antoinebonin\Matomo\Domain\Response\Response;

interface HttpClientAdapterInterface
{
    public function setBaseUrl(string $baseUrl): self;

    public function setBearerToken(string $authToken): self;

    public function send(QueryInterface $query): Response;

    public function getUrl(): string;
}

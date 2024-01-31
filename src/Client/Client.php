<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Client;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Client
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $urlInstance,
        #[\SensitiveParameter]
        private readonly string $authToken
    ) {
    }
}

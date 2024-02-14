<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Client;

use Antoinebonin\Matomo\Domain\Action\ActionInterface;
use Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface;
use Antoinebonin\Matomo\Domain\Response\Response;

class Client
{
    public string $urlInstance;

    public function __construct(
        public readonly HttpClientAdapterInterface $httpClientAdapter,
        string $urlInstance,
        #[\SensitiveParameter]
        public readonly string $authToken
    ) {
        if (!str_ends_with($urlInstance, '/')) {
            $urlInstance .= '/';
        }

        $this->urlInstance = $urlInstance;
        $this->populateAdapter();
    }

    private function populateAdapter(): void
    {
        $this->httpClientAdapter
            ->setBaseUrl($this->urlInstance)
            ->setBearerToken($this->authToken)
        ;
    }

    public function send(ActionInterface $action): Response
    {
        return $action->execute($this->httpClientAdapter);
    }
}

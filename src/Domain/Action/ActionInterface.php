<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Action;

use Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface;
use Antoinebonin\Matomo\Domain\Response\Response;

interface ActionInterface
{
    public function execute(HttpClientAdapterInterface $httpClient): Response;
}

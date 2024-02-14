<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Action;

use Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface;
use Antoinebonin\Matomo\Domain\Query\DeleteSiteQuery;
use Antoinebonin\Matomo\Domain\Response\Response;

class DeleteSiteAction implements ActionInterface
{
    public function __construct(
        public readonly int $siteId,
    ) {}

    public function execute(HttpClientAdapterInterface $httpClient): Response
    {
        return $httpClient->send(new DeleteSiteQuery(
            $this->siteId
        ));
    }
}

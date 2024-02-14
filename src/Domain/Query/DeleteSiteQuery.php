<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Query;

class DeleteSiteQuery implements QueryInterface
{
    public function __construct(
        private readonly int $siteId,
    ) {}

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrl(): string
    {
        return '&method=SitesManager.deleteSite&idSite='.$this->siteId;
    }

    public function getOptions(): array
    {
        return [];
    }
}

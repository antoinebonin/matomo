<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Query;

class UpdateSiteUrlQuery implements QueryInterface
{
    public function __construct(
        private readonly int $siteId,
        private readonly string $siteUrl
    ) {}

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrl(): string
    {
        return '&method=SitesManager.updateSite&idSite='.$this->siteId.'&urls='.$this->siteUrl;
    }

    public function getOptions(): array
    {
        return [];
    }
}

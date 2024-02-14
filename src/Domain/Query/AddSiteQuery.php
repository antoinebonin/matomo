<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Query;

class AddSiteQuery implements QueryInterface
{
    public function __construct(
        private readonly string $siteName,
        private readonly string $siteUrl
    ) {}

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrl(): string
    {
        return '&method=SitesManager.addSite&siteName='.$this->siteName.'&urls='.$this->siteUrl;
    }

    public function getOptions(): array
    {
        return [];
    }
}

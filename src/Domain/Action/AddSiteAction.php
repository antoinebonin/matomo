<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Action;

use Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface;
use Antoinebonin\Matomo\Domain\Query\AddSiteQuery;
use Antoinebonin\Matomo\Domain\Response\Response;
use Antoinebonin\Matomo\Domain\Trait\ValidateUrlTrait;

class AddSiteAction implements ActionInterface
{
    use ValidateUrlTrait;
    public string $siteUrl;

    public function __construct(
        public readonly string $siteName,
        string $siteUrl
    ) {
        if (!$this->validerURL($siteUrl)) {
            throw new \RuntimeException('Url ('.$siteUrl.') non valide');
        }
        $this->siteUrl = $siteUrl;
    }

    public function execute(HttpClientAdapterInterface $httpClient): Response
    {
        return $httpClient->send(new AddSiteQuery(
            $this->siteName,
            $this->siteUrl
        ));
    }
}

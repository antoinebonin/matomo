<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Action;

use Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface;
use Antoinebonin\Matomo\Domain\Query\UpdateSiteUrlQuery;
use Antoinebonin\Matomo\Domain\Response\Response;
use Antoinebonin\Matomo\Domain\Trait\ValidateUrlTrait;

class UpdateSiteUrlAction implements ActionInterface
{
    use ValidateUrlTrait;
    public string $siteUrl;

    public function __construct(
        public readonly int $siteId,
        string $siteUrl
    ) {
        if (!$this->validerURL($siteUrl)) {
            throw new \RuntimeException('Url non valide');
        }
        $this->siteUrl = $siteUrl;
    }

    public function execute(HttpClientAdapterInterface $httpClient): Response
    {
        return $httpClient->send(new UpdateSiteUrlQuery(
            $this->siteId,
            $this->siteUrl
        ));
    }
}

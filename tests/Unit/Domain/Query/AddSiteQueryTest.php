<?php

declare(strict_types=1);

namespace Unit\Domain\Query;

use Antoinebonin\Matomo\Domain\Query\AddSiteQuery;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class AddSiteQueryTest extends TestCase
{
    public function testUrl(): void
    {
        $url = 'https://google.fr';
        $name = 'Google';

        $query = new AddSiteQuery(
            $name,
            $url
        );

        self::assertSame(
            '&method=SitesManager.addSite&siteName=Google&urls=https://google.fr',
            $query->getUrl()
        );
    }
}

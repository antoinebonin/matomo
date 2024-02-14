<?php

declare(strict_types=1);

namespace Unit\Domain\Query;

use Antoinebonin\Matomo\Domain\Query\UpdateSiteUrlQuery;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class UpdateSiteUrlQueryTest extends TestCase
{
    public function testUrl(): void
    {
        $url = 'https://google.fr';
        $id = 1;

        $query = new UpdateSiteUrlQuery(
            $id,
            $url
        );

        self::assertSame(
            '&method=SitesManager.updateSite&idSite='.$id.'&urls='.$url,
            $query->getUrl()
        );
    }
}

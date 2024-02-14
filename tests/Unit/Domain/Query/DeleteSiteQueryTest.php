<?php

declare(strict_types=1);

namespace Unit\Domain\Query;

use Antoinebonin\Matomo\Domain\Query\DeleteSiteQuery;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class DeleteSiteQueryTest extends TestCase
{
    public function testUrl(): void
    {
        $id = 1;

        $query = new DeleteSiteQuery(
            $id
        );

        self::assertSame(
            '&method=SitesManager.deleteSite&idSite='.$id,
            $query->getUrl()
        );
    }
}

<?php

declare(strict_types=1);

namespace Unit\Domain\Action;

use Antoinebonin\Matomo\Domain\Action\DeleteSiteAction;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class DeleteSiteActionTest extends TestCase
{
    public function testConstruct(): void
    {
        $id = 1;

        $action = new DeleteSiteAction($id);

        self::assertSame($id, $action->siteId);
    }
}

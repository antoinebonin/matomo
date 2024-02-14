<?php

declare(strict_types=1);

namespace Unit\Domain\Action;

use Antoinebonin\Matomo\Domain\Action\UpdateSiteUrlAction;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class UpdatSiteUrlActionTest extends TestCase
{
    public function testConstruct(): void
    {
        $url = 'https://google.fr';
        $id = 1;

        $action = new UpdateSiteUrlAction($id, $url);

        self::assertSame($url, $action->siteUrl);
        self::assertSame($id, $action->siteId);
    }

    public function testConstructUrlException(): void
    {
        $id = 1;
        $url = 'https://.fr';

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Url non valide');

        new UpdateSiteUrlAction($id, $url);
    }
}

<?php

declare(strict_types=1);

namespace Unit\Domain\Action;

use Antoinebonin\Matomo\Domain\Action\AddSiteAction;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class AddSiteActionTest extends TestCase
{
    public function testConstruct(): void
    {
        $url = 'https://google.fr';
        $name = 'Google';

        $action = new AddSiteAction($name, $url);

        self::assertSame($url, $action->siteUrl);
        self::assertSame($name, $action->siteName);
    }

    public function testConstructUrlException(): void
    {
        $name = 'Google';
        $url = 'https://.fr';

        try {
            new AddSiteAction($name, $url);
        } catch (\Exception $exception) {
            self::assertInstanceOf(\RuntimeException::class, $exception);
            self::assertEquals('Url ('.$url.') non valide', $exception->getMessage());
        }
    }
}

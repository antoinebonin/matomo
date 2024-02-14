<?php

declare(strict_types=1);

namespace Unit\Domain\Client;

use Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface;
use Antoinebonin\Matomo\Domain\Client\Client;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ClientTest extends TestCase
{
    public function testConstruct(): void
    {
        $adapter = self::createMock(HttpClientAdapterInterface::class);
        $adapter->expects(self::once())->method('setBaseUrl');

        $client = new Client($adapter, 'ab', 'token');

        self::assertInstanceOf(Client::class, $client);
    }

    public function testConstructAddSlash(): void
    {
        $adapter = self::createMock(HttpClientAdapterInterface::class);

        $client = new Client($adapter, 'ab', 'token');

        self::assertInstanceOf(Client::class, $client);
        self::assertEquals('ab/', $client->urlInstance);
    }

    public function testConstructWontAddDoubleSlash(): void
    {
        $adapter = self::createMock(HttpClientAdapterInterface::class);

        $client = new Client($adapter, 'ab/', 'token');

        self::assertInstanceOf(Client::class, $client);
        self::assertEquals('ab/', $client->urlInstance);
    }
}

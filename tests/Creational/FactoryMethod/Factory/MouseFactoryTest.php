<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Tests\Creational\FactoryMethod\Factory;

use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\MouseFactory;
use PHPUnit\Framework\TestCase;

class MouseFactoryTest extends TestCase
{
    public function testConnectDevice(): void
    {
        $factory = new MouseFactory();
        $mouse = $factory->connectDevice();
        self::assertTrue($mouse->isConnected());
    }
}

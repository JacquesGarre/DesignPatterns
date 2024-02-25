<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Tests\Creational\FactoryMethod\Factory;

use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\KeyboardFactory;
use PHPUnit\Framework\TestCase;

class KeyboardFactoryTest extends TestCase
{
    public function testConnectDevice(): void
    {
        $factory = new KeyboardFactory();
        $keyboard = $factory->connectDevice();
        self::assertTrue($keyboard->isConnected());
    }
}

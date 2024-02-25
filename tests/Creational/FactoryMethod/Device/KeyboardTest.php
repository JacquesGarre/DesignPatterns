<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Tests\Creational\FactoryMethod\Device;

use Jaks\DesignPatterns\Creational\FactoryMethod\Device\Keyboard;
use PHPUnit\Framework\TestCase;

class KeyboardTest extends TestCase
{
    public function testConnect(): void
    {
        $keyboard = new Keyboard();
        self::assertFalse($keyboard->isConnected());

        $keyboard->connect();
        self::assertTrue($keyboard->isConnected());
    }
}

<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Tests\Creational\FactoryMethod\Device;

use Jaks\DesignPatterns\Creational\FactoryMethod\Device\Mouse;
use PHPUnit\Framework\TestCase;

class MouseTest extends TestCase
{
    public function testConnect(): void
    {
        $mouse = new Mouse();
        self::assertFalse($mouse->isConnected());

        $mouse->connect();
        self::assertTrue($mouse->isConnected());
    }
}

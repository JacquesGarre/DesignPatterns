<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Tests\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\KeyboardFactory;
use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\MouseFactory;
use Jaks\DesignPatterns\Creational\FactoryMethod\FactoryMethodApp;

class FactoryMethodAppTest extends TestCase
{
    public function testRun(): void
    {
        $this->expectNotToPerformAssertions();

        $keyboardFactory = new KeyboardFactory();
        $app = new FactoryMethodApp($keyboardFactory);
        $app->run();
        
        $mouseFactory = new MouseFactory();
        $app = new FactoryMethodApp($mouseFactory);
        $app->run();        
    }
}

<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\FactoryMethod\Factory;

use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\DeviceFactoryInterface;
use Jaks\DesignPatterns\Creational\FactoryMethod\Device\DeviceInterface;
use Jaks\DesignPatterns\Creational\FactoryMethod\Device\Mouse;

class MouseFactory implements DeviceFactoryInterface
{
    public function create(): DeviceInterface
    {
        return new Mouse();
    }
}

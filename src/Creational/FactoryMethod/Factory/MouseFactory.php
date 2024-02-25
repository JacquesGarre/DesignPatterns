<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\FactoryMethod\Factory;

use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\AbstractDeviceFactory;
use Jaks\DesignPatterns\Creational\FactoryMethod\Device\DeviceInterface;
use Jaks\DesignPatterns\Creational\FactoryMethod\Device\Mouse;

class MouseFactory extends AbstractDeviceFactory
{
    public function create(): DeviceInterface
    {
        return new Mouse();
    }
}

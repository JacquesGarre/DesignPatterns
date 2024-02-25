<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\FactoryMethod\Factory;

use Jaks\DesignPatterns\Creational\FactoryMethod\Device\DeviceInterface;

abstract class AbstractDeviceFactory
{
    public function connectDevice(): DeviceInterface
    {
        $device = $this->create();
        $device->connect();
        return $device;
    }

    abstract public function create(): DeviceInterface;
}

<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\FactoryMethod\Factory;

use Jaks\DesignPatterns\Creational\FactoryMethod\Device\DeviceInterface;

interface DeviceFactoryInterface
{
    public function create(): DeviceInterface;
}

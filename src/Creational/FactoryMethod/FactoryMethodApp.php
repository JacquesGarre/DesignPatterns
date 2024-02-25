<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\FactoryMethod;

use Jaks\DesignPatterns\AbstractApp;
use Jaks\DesignPatterns\Creational\FactoryMethod\Device\DeviceInterface;
use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\AbstractDeviceFactory;
use ReflectionClass;

class FactoryMethodApp extends AbstractApp
{
    private DeviceInterface $device;

    public function __construct(private readonly AbstractDeviceFactory $factory)
    {
    }

    public function exampleUsage(): void
    {
        $this->device = $this->factory->connectDevice();
    }

    public function textBeforeExample(): string
    {
        $factoryReflection = new ReflectionClass($this->factory);
        return sprintf("=> Running with : %s\n", $factoryReflection->getShortName());
    }

    public function textAfterExample(): string
    {
        $deviceReflection = new ReflectionClass($this->device);
        return sprintf("=> %s is connected : %s\n", $deviceReflection->getShortName(), $this->device->isConnected());
    }
}

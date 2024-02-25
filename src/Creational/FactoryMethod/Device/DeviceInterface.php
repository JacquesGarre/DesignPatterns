<?php

namespace Jaks\DesignPatterns\Creational\FactoryMethod\Device;

interface DeviceInterface
{
    public function connect(): void;

    public function isConnected(): bool;
}

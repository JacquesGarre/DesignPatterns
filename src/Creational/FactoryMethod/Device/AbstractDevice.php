<?php

namespace Jaks\DesignPatterns\Creational\FactoryMethod\Device;

abstract class AbstractDevice implements DeviceInterface
{
    private bool $isConnected = false;

    public function connect(): void
    {
        $this->isConnected = true;
    }

    public function isConnected(): bool
    {
        return $this->isConnected;
    }
}

<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\FactoryMethod;

use Jaks\DesignPatterns\Creational\FactoryMethod\Factory\DeviceFactoryInterface;

class Client
{
    public function __construct(private readonly DeviceFactoryInterface $deviceFactory)
    {
    }

    public function exampleUsage(): void
    {
        $device = $this->deviceFactory->create();
    }
}

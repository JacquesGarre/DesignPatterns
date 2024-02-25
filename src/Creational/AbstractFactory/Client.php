<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\AbstractFactory;

use Jaks\DesignPatterns\Creational\AbstractFactory\Factory\AbstractArtGalleryFactory;

class Client
{
    public function __construct(private readonly AbstractArtGalleryFactory $artGalleryFactory)
    {
    }

    public function exampleUsage(): void
    {
        $gallery = $this->artGalleryFactory->createGallery();
    }
}

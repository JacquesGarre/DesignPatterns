<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\AbstractFactory\Factory;

use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Drawing\DrawingInterface;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Painting\PaintingInterface;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Drawing\RenaissanceDrawing;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Painting\RenaissancePainting;
use Jaks\DesignPatterns\Creational\AbstractFactory\ArtGallery\RenaissanceArtGallery;
use Jaks\DesignPatterns\Creational\AbstractFactory\ArtGallery\ArtGalleryInterface;

class RenaissanceArtGalleryFactory extends AbstractArtGalleryFactory
{
    public function createDrawing(): DrawingInterface
    {
        return new RenaissanceDrawing();
    }

    public function createPainting(): PaintingInterface
    {
        return new RenaissancePainting();
    }

    public function createGallery(): ArtGalleryInterface
    {
        return new RenaissanceArtGallery(
            $this->createDrawing(),
            $this->createPainting()
        );
    }
}
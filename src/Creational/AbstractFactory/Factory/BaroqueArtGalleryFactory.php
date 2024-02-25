<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\AbstractFactory\Factory;

use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Drawing\DrawingInterface;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Painting\PaintingInterface;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Drawing\BaroqueDrawing;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Painting\BaroquePainting;
use Jaks\DesignPatterns\Creational\AbstractFactory\ArtGallery\BaroqueArtGallery;
use Jaks\DesignPatterns\Creational\AbstractFactory\ArtGallery\ArtGalleryInterface;

class BaroqueArtGalleryFactory extends AbstractArtGalleryFactory
{
    public function createDrawing(): DrawingInterface
    {
        return new BaroqueDrawing();
    }

    public function createPainting(): PaintingInterface
    {
        return new BaroquePainting();
    }

    public function createGallery(): ArtGalleryInterface
    {
        return new BaroqueArtGallery(
            $this->createDrawing(),
            $this->createPainting()
        );
    }
}
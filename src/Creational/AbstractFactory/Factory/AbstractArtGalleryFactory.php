<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\AbstractFactory\Factory;

use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Drawing\DrawingInterface;
use Jaks\DesignPatterns\Creational\AbstractFactory\Art\Painting\PaintingInterface;
use Jaks\DesignPatterns\Creational\AbstractFactory\ArtGallery\ArtGalleryInterface;

abstract class AbstractArtGalleryFactory
{
    abstract public function createDrawing(): DrawingInterface;

    abstract public function createPainting(): PaintingInterface;

    abstract public function createGallery(): ArtGalleryInterface;
}

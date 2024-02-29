<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\Builder\Builder;

use Jaks\DesignPatterns\Creational\Builder\Field\Field;
use Jaks\DesignPatterns\Creational\Builder\Field\FieldType;

abstract class AbstractFieldBuilder
{
    private Field $field;

    abstract public function name(string $name): self;
    abstract public function id(string $id): self;
    abstract public function type(FieldType $type): self;
    abstract public function disabled(bool $disabled): self;
    abstract public function readonly(bool $readonly): self;
    abstract public function required(bool $required): self;
    abstract public function placeholder(string $placeholder): self;
    abstract public function pattern(string $pattern): self;
    abstract public function value(string $value): self;
    abstract public function min(int $min): self;
    abstract public function max(int $max): self;
    abstract public function minLength(int $minLength): self;
    abstract public function maxLength(int $maxLength): self;
    abstract public function step(float $step): self;

    public function build()
    {
        return $this->field;
    }
}

<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\Builder\Builder;

use Jaks\DesignPatterns\Creational\Builder\Field\Field;
use Jaks\DesignPatterns\Creational\Builder\Field\FieldType;

class TextFieldBuilder extends AbstractFieldBuilder
{
    private Field $field;

    public function __construct()
    {
        $this->field = new Field();
        $this->type(new FieldType(FieldType::TEXT));
    }

    public function name(string $name): self
    {
        $this->field->name = $name;
        return $this;
    }

    public function id(string $id): self
    {
        $this->field->id = $id;
        return $this;
    }

    public function type(FieldType $type): self
    {
        $this->field->type = $type;
        return $this;
    }

    public function disabled(bool $disabled): self
    {
        $this->field->disabled = $disabled;
        return $this;
    }

    public function readonly(bool $readonly): self
    {
        $this->field->readonly = $readonly;
        return $this;
    }

    public function required(bool $required): self
    {
        $this->field->required = $required;
        return $this;
    }

    public function placeholder(string $placeholder): self
    {
        $this->field->placeholder = $placeholder;
        return $this;
    }

    public function pattern(string $pattern): self
    {
        $this->field->pattern = $pattern;
        return $this;
    }

    public function value(string $value): self
    {
        $this->field->value = $value;
        return $this;
    }

    public function min(int $min): self
    {
        return $this;
    }

    public function max(int $max): self
    {
        return $this;
    }

    public function minLength(int $minLength): self
    {
        $this->field->minLength = $minLength;
        return $this;
    }

    public function maxLength(int $maxLength): self
    {
        $this->field->maxLength = $maxLength;
        return $this;
    }

    public function step(float $step): self
    {
        return $this;
    }
}

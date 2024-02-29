<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\Builder\Field;

class Field
{
    public function __construct(
        public ?string $name = null,
        public ?string $id = null,
        public ?FieldType $type = null,
        public ?bool $disabled = false,
        public ?bool $readonly = false,
        public ?bool $required = false,
        public ?string $placeholder = null,
        public ?string $pattern = null,
        public ?string $value = null,
        public ?int $min = null,
        public ?int $max = null,
        public ?int $minLength = null,
        public ?int $maxLength = null,
        public ?float $step = null
    ) {
    }
}

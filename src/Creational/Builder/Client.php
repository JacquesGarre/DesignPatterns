<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\Builder;

use Jaks\DesignPatterns\Creational\Builder\Builder\AbstractFieldBuilder;
use Jaks\DesignPatterns\Creational\Builder\Field\FieldType;

class Client
{
    public function __construct(private readonly AbstractFieldBuilder $builder)
    {
    }

    public function exampleUsage(): void
    {
        $textField = $this->builder
            ->type(new FieldType(FieldType::TEXT))
            ->name('firstName')
            ->id('person_first_name')
            ->minLength(3)
            ->maxLength(50)
            ->required(true)
            ->build();

        $numberField = $this->builder
            ->type(new FieldType(FieldType::NUMBER))
            ->name('age')
            ->id('person_age')
            ->min(18)
            ->required(true)
            ->build();
    }
}

<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns\Creational\Builder\Field;

class FieldType
{
    public const TEXT = 'text';
    public const CHECKBOX = 'checkbox';
    public const BUTTON = 'button';
    public const COLOR = 'color';
    public const DATE = 'date';
    public const EMAIL = 'email';
    public const HIDDEN = 'hidden';
    public const NUMBER = 'number';
    public const PASSWORD = 'password';
    public const RANGE = 'range';
    public const TIME = 'time';

    public function __construct(string $type)
    {
        if (!self::isValid($type)) {
            throw new FieldTypeException('Invalid field type : ' . $type);
        }
    }

    public static function isValid(string $type)
    {
        return in_array($type, [
            self::TEXT,
            self::CHECKBOX,
            self::BUTTON,
            self::COLOR,
            self::DATE,
            self::EMAIL,
            self::HIDDEN,
            self::NUMBER,
            self::PASSWORD,
            self::RANGE,
            self::TIME
        ]);
    }
}

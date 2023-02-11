<?php

namespace App\Constants;

enum Status : string
{
    case OPEN = 'open';
    case CLOSE = 'close';

    public static function values(): array
    {
        return [
            self::OPEN->value,
            self::CLOSE->value,
        ];
    }

    public static function random(): string
    {
        return collect(self::values())->random();
    }
}
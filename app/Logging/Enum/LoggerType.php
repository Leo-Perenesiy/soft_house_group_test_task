<?php

namespace App\Logging\Enum;

enum LoggerType: string
{
    case FILE = 'file';
    case DATABASE = 'database';
    case EMAIL = 'email';

    public static function all(): array
    {
        return [
            self::FILE->value,
            self::DATABASE->value,
            self::EMAIL->value
        ];
    }
}

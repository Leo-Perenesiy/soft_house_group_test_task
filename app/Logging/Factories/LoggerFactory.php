<?php

namespace App\Logging\Factories;

use App\Logging\Abstracts\LoggerFactoryInterface;
use App\Logging\Abstracts\LoggerInterface;
use App\Logging\Enum\LoggerType;
use App\Logging\Services\DatabaseLogger;
use App\Logging\Services\EmailLogger;
use App\Logging\Services\FileLogger;
use InvalidArgumentException;

class LoggerFactory implements LoggerFactoryInterface
{
    public static function createLogger(string $type): LoggerInterface
    {
        return match ($type) {
            LoggerType::FILE->value => new FileLogger(),
            LoggerType::EMAIL->value => new EmailLogger(),
            LoggerType::DATABASE->value => new DatabaseLogger(),
            default => throw new InvalidArgumentException("Unknown logger: $type"),
        };
    }
}

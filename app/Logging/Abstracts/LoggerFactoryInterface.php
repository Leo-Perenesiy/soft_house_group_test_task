<?php

namespace App\Logging\Abstracts;

interface LoggerFactoryInterface
{
    /**
     * Creates a logger instance based on a type.
     *
     * @param string $type
     * @return LoggerInterface
     */
    public static function createLogger(string $type): LoggerInterface;
}

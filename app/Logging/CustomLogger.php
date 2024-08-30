<?php

namespace App\Logging;

use App\Logging\Abstracts\LoggerInterface;
use App\Logging\Enum\LoggerType;
use App\Logging\Factories\LoggerFactory;

class CustomLogger
{
    protected LoggerInterface $logger;

    public function __construct()
    {
        $this->logger = LoggerFactory::createLogger(config('custom_logger.default'));
    }

	/**
    *	Sends a log message to the default logger.
    */
    public function log(string $message): void
    {
        $this->logger->send($message);
    }

     /**
     *	Sends a log message to a special logger.
     */
     public function logTo(string $type, string $message): void
     {
        $this->logger = LoggerFactory::createLogger($type);

        $this->logger->send($message);
    }

    /**
     *	Sends a log message to all loggers.
     */
    static public function logToAll(string $message): void
    {
        foreach (LoggerType::all() as $type) {
            $logger = LoggerFactory::createLogger($type);
            $logger->send($message);
        }
    }
}

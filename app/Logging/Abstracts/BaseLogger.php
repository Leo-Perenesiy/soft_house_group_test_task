<?php

namespace App\Logging\Abstracts;

abstract class BaseLogger implements LoggerInterface
{
    protected string $type;

    abstract public function send(string $message): void;

    public function sendByLogger(string $message, string $loggerType): void
    {
        $this->send($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}

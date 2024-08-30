<?php

namespace App\Logging\Services;

use App\Logging\Abstracts\BaseLogger;
use Illuminate\Support\Facades\Storage;

class FileLogger extends BaseLogger
{
    protected string $type = 'file';

    public function send(string $message): void
    {
        $timestamp = now()->format('Y-m-d H:i:s');

        $logEntry = "[{$timestamp}] - {$message}";

        Storage::append('logs/custom.log', $logEntry);
    }
}

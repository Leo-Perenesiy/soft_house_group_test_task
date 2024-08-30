<?php

namespace App\Http\Controllers;

use App\Logging\CustomLogger;
use Illuminate\Http\Request;

class LoggerController extends Controller
{
    private CustomLogger $logger;

    public function __construct(CustomLogger $logger)
    {
        $this->logger = $logger;
    }

    public function logByDefault(): void
    {
        $this->logger->log('Some log');
    }

    public function logByType(Request $request): void
    {
        $this->logger->logTo($request->input('log_type'), 'Some log');
    }

    public function logAll(): void
    {
        CustomLogger::logToAll('Some log');
    }
}

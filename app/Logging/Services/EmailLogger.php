<?php

namespace App\Logging\Services;

use App\Logging\Abstracts\BaseLogger;
use Illuminate\Support\Facades\Mail;

class EmailLogger extends BaseLogger
{
    protected string $type = 'email';

    public function send(string $message): void
    {
        Mail::raw($message, function($message) {
            $message->to(config('custom_logger.email'))->subject('Log Message');
        });
    }
}

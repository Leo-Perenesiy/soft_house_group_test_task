<?php

namespace App\Logging\Services;

use App\Logging\Abstracts\BaseLogger;
use Illuminate\Support\Facades\DB;

class DatabaseLogger extends BaseLogger
{
    protected string $type = 'database';

    public function send(string $message): void
    {
        DB::table('logs')->insert(['message' => $message, 'created_at' => now()]);
    }
}

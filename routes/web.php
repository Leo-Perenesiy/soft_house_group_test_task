<?php

use App\Http\Controllers\LoggerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/log-by-default', [LoggerController::class, 'logByDefault'])->name('log-by-default');
Route::post('/log-by-type', [LoggerController::class, 'logByType'])->name('log-by-type');
Route::post('/log-all', [LoggerController::class, 'logAll'])->name('log-all');

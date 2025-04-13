<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return [
        'message' => 'Hello, World!',
        'timestamp' => now()->toDateTimeString(),
    ];
});

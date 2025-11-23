<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/radio-proxy', function () {
    $streamUrl = 'http://176.58.96.67:8019/stream';

    $stream = fopen($streamUrl, 'r');

    return response()->stream(function () use ($stream) {
        fpassthru($stream);
        if (connection_aborted()) {
            fclose($stream);
        }
    }, 200, [
        'Content-Type' => 'audio/mpeg',
        'Cache-Control' => 'no-cache',
        'Transfer-Encoding' => 'chunked', // Optional, depending on player
    ]);
});

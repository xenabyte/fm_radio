<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/radio-proxy', function () {
   $streamUrl = 'http://176.58.96.67:8019/stream';

    // 1. Open a connection to the insecure stream
    // We use 'rb' for read binary
    $stream = @fopen($streamUrl, 'rb');

    if (!$stream) {
        abort(502, 'Cannot connect to radio stream.');
    }

    // 2. Return a Streamed Response
    // This passes the audio data through to the user chunk by chunk
    return Response::stream(function () use ($stream) {
        while (!feof($stream)) {
            // Read 1024 bytes at a time and output them immediately
            echo fread($stream, 1024);
            
            // Flush the buffer to the browser so audio plays instantly
            if (ob_get_level() > 0) ob_flush();
            flush();

            // Stop the loop if the user closes the browser
            if (connection_aborted()) {
                break;
            }
        }
        fclose($stream);
    }, 200, [
        'Content-Type' => 'audio/mpeg',
        'Cache-Control' => 'no-cache',
        'X-Accel-Buffering' => 'no', // Tells Nginx not to buffer this
    ]);
});

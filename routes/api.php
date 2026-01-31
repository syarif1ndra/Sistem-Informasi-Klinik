<?php

use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/current-queue', function () {
    $currentQueue = Queue::where('date', date('Y-m-d'))
        ->where('status', 'calling')
        ->orderBy('updated_at', 'desc')
        ->first();
        
    return response()->json([
        'queue_number' => $currentQueue ? $currentQueue->queue_number : null
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

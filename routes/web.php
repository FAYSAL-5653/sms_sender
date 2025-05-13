<?php

use App\Http\Controllers\PusherController;
use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SmsController::class, 'sms_page']);
Route::post('/send-sms', [SmsController::class, 'send_sms'])->name('send.sms');
Route::get('/pusher', [PusherController::class, 'pusher_page']);

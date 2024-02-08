<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Sk\SparrowSms\Http\Controllers\SparrowSmsController;

Route::get('sparrow-sms', [Kalukunda\SparrowSms\Http\Controllers\SparrowSmsController::class, 'index'])->name('sparrow-sms.index');

Route::post('sparrow-sms', [Kalukunda\SparrowSms\Http\Controllers\SparrowSmsController::class, 'store'])->name('sparrow-sms.send');

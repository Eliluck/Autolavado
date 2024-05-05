<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckRFCController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-rfc', [CheckRFCController::class, 'checkRFC']);

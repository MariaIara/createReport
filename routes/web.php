<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('send-email-pdf', [PDFController::class, 'index']);

Route::get('/ata', function () {
    return view('ata');
});

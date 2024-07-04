<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home1');
});

Route::get('/inicio', function () {
    return view('home1');
})->name('salir');

Route::get('/Home', function () {
    return view('Facturacion');
})->name('home');

Route::get('/Home/menu', function () {
    return view('menuFacturacion');
});

Route::get('/Home/registro', function () {
    return view('registroFacturacion');
})->name('datos-fiscales');

Route::get('Home/registro/nuevo', function () {
    return view('registroNuevoFacturacion');
});

Route::get('/Home/ticket', function () {
    return view('ticketFacturacion');
})->name('facturacion');

Route::get('/Home/download', function () {
    return view('downloadFacturacion');
})->name('pdf-xml');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckRFCController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DirSatColController;
use App\Http\Controllers\DirSatCPController;
use App\Http\Controllers\DirSatEdoController;
use App\Http\Controllers\DirSatLocController;
use App\Http\Controllers\DirSatMunController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReportVentaController;
use App\Http\Controllers\UpdateDatosFiscalesController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\RFCValidationController;
use App\Http\Controllers\SucursalController;

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


//Ruta para validar el RFC de entrada, esta ruta es del controlador RFCValidationController
Route::post('/validador', [RFCValidationController::class, 'validateRFC']);

// Ruta para verificar la existencia de un RFC, esta ruta es del controlador CheckRFCController
Route::post('/check-rfc', [CheckRFCController::class, 'checkRFC']);

// Ruta para obtener la información del cliente por RFC, esta ruta es del controlador ClientController
Route::get('/client/{rfc}', [ClientController::class, 'getByRFC']);
Route::post('/client/save', [ClientController::class, 'saveClient']);

// Ruta para obtener las colonias basadas en un código postal, esta ruta es del controlador DirSatColController
Route::get('/colonies/{cp}', [DirSatColController::class, 'getByCP']);

// Ruta para obtener los códigos postales basados en un código de país, esta ruta es del controlador DirSatCPController
Route::get('/postal-codes/{countryCode}', [DirSatCPController::class, 'byGetCP']);

// Ruta para obtener el estado basado en un código postal, esta ruta es del controlador DirSatEdoController
Route::get('/estado/{cp}', [DirSatEdoController::class, 'getEstadoPorEdoCod']);

// Ruta para obtener la localidad basada en un código postal, esta ruta es del controlador DirSatLocController
Route::get('/locality/{postalCode}', [DirSatLocController::class, 'getByLocCod']);

// Ruta para obtener los municipios basados en un código de municipio, esta ruta es del controlador DirSatMunController
Route::get('/municipalities/{municipioCode}', [DirSatMunController::class, 'getByMunicipioCode']);

// Ruta para descargar archivos PDF y XML basados en un identificador de venta, esta ruta es del controlador DownloadController
Route::post('/download-pdf-xml', [DownloadController::class, 'downloadPDFXML']);

// Ruta para facturar un ticket, esta ruta es del controlador FacturacionController
Route::post('/facturar-ticket', [FacturacionController::class, 'facturarTicket']);

/*seccion del controlador ReportVentaController*/

// Ruta para obtener todas las ventas, con la opción de filtrar por rango de fechas
Route::get('/ventas', [ReportVentaController::class, 'index']);

// Ruta para mostrar una venta específica junto con los datos del cliente
Route::get('/ventas/{id}', [ReportVentaController::class, 'show']);

// Ruta para crear una nueva venta
Route::post('/ventas', [ReportVentaController::class, 'store']);

/* fin de la seccion del controlador ReportVentaController*/

// Ruta para actualizar los datos fiscales de un cliente, la ruta del controlador UpdateDatosFiscalesController
Route::put('/update', [UpdateDatosFiscalesController::class, 'updateDatosFiscales']);

// Ruta para obtener documentos de ventas filtrados por RFC y fechas, esta ruta es del controlador VentaController
Route::post('/ventas/documentos', [VentaController::class, 'getDocumentos']);

Route::get('/download-ftp', [DownloadController::class, 'testDownload']);

Route::get('/sucursales', [SucursalController::class, 'index']);

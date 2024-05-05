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

Route::get('/', function () {
    return view('welcome');
});

// Ruta para verificar la existencia de un RFC, esta ruta es del controlador CheckRFCController
Route::post('/check-rfc', [CheckRFCController::class, 'checkRFC'])->name('check.rfc');

// Ruta para obtener la información del cliente por RFC, esta ruta es del controlador ClientController
Route::get('/client/{rfc}', [ClientController::class, 'getByRFC'])->name('client.getByRFC');

// Ruta para obtener las colonias basadas en un código postal, esta ruta es del controlador DirSatColController
Route::get('/colonies/{cp}', [DirSatColController::class, 'getByCP'])->name('colonies.getByCP');

// Ruta para obtener los códigos postales basados en un código de país, esta ruta es del controlador DirSatCPController
Route::get('/postal-codes/{countryCode}', [DirSatCPController::class, 'byCountryCode'])->name('postalCodes.byCountryCode');

// Ruta para obtener el estado basado en un código postal, esta ruta es del controlador DirSatEdoController
Route::get('/state-by-cp/{cp}', [DirSatEdoController::class, 'getEstadoPorCP'])->name('state.getByCP');

// Ruta para obtener la localidad basada en un código postal, esta ruta es del controlador DirSatLocController
Route::get('/locality-by-cp/{postalCode}', [DirSatLocController::class, 'getByPostalCode'])->name('locality.getByPostalCode');

// Ruta para obtener los municipios basados en un código de municipio, esta ruta es del controlador DirSatMunController
Route::get('/municipalities-by-code/{municipioCode}', [DirSatMunController::class, 'getByMunicipioCode'])->name('municipalities.getByMunicipioCode');

// Ruta para descargar archivos PDF y XML basados en un identificador de venta, esta ruta es del controlador DownloadController
Route::post('/download-pdf-xml', [DownloadController::class, 'downloadPDFXML'])->name('download.pdfxml');

// Ruta para facturar un ticket, esta ruta es del controlador FacturacionController
Route::post('/facturar-ticket', [FacturacionController::class, 'facturarTicket'])->name('facturacion.facturarTicket');

/*seccion del controlador ReportVentaController*/

// Ruta para obtener todas las ventas, con la opción de filtrar por rango de fechas
Route::get('/ventas', [ReportVentaController::class, 'index'])->name('ventas.index');

// Ruta para mostrar una venta específica junto con los datos del cliente
Route::get('/ventas/{id}', [ReportVentaController::class, 'show'])->name('ventas.show');

// Ruta para crear una nueva venta
Route::post('/ventas', [ReportVentaController::class, 'store'])->name('ventas.store');

/* fin de la seccion del controlador ReportVentaController*/

// Ruta para actualizar los datos fiscales de un cliente, la ruta del controlador UpdateDatosFiscalesController
Route::put('/update-datos-fiscales', [UpdateDatosFiscalesController::class, 'updateDatosFiscales'])->name('datosFiscales.update');

// Ruta para obtener documentos de ventas filtrados por RFC y fechas, esta ruta es del controlador VentaController
Route::post('/ventas/documentos', [VentaController::class, 'getDocumentos'])->name('ventas.getDocumentos');

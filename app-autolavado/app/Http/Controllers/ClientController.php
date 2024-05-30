<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Client;
use App\Models\DirSatCP;
use App\Models\DirSatCol;
use App\Models\SatUsoCFDI;
use App\Models\SatRegFisc;
use App\Models\PagoForma;
use App\Models\PagoMetodo;
use App\Models\DirSatPais;

class ClientController extends Controller
{
    /**
     * Devuelve la información del cliente correspondiente al RFC en formato JSON.
     *
     * @param  string  $rfc
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByRFC($rfc)
    {
        Log::info('Iniciando la búsqueda del cliente', ['RFC' => $rfc]);
        try {
            Log::info('Obteniendo catálogos del sistema');
            $paises = DirSatPais::all()->toArray();
            Log::info('Catálogos de países obtenidos', ['cantidad' => count($paises)]);
            $usosCFDI = SatUsoCFDI::all()->toArray();
            Log::info('Catálogos de usos CFDI obtenidos', ['cantidad' => count($usosCFDI)]);
            $regimenes = SatRegFisc::all()->toArray();
            Log::info('Catálogos de regímenes fiscales obtenidos', ['cantidad' => count($regimenes)]);
            $formasPago = PagoForma::all()->toArray();
            Log::info('Catálogos de formas de pago obtenidos', ['cantidad' => count($formasPago)]);
            $metodosPago = PagoMetodo::all()->toArray();
            Log::info('Catálogos de métodos de pago obtenidos', ['cantidad' => count($metodosPago)]);

            $client = Client::where('RFC', $rfc)->first();
            if (!$client) {
                Log::info('Cliente no encontrado con el RFC proporcionado', ['RFC' => $rfc]);
                return response()->json([
                    'error' => 'Cliente no encontrado',
                    'paises' => $paises,
                    'usos_cfdi' => $usosCFDI,
                    'regimen_fiscal' => $regimenes,
                    'pagos' => $formasPago,
                    'metodos' => $metodosPago,
                ], 404);
            }

            Log::info('Cliente encontrado, procesando datos adicionales', ['client' => $client->CLIENTE]);
            $data = [
                'NOMBRE' => $client->NOMBRE,
                'RFC' => $client->RFC,
                'PAIS' => $client->PAIS,
                'CP' => $client->CP,
                'POBLA' => $client->POBLA,
                'CIUDAD' => $client->CIUDAD,
                'ESTADO' => $client->ESTADO,
                'COLONIA' => $client->COLONIA,
                'CALLE' => $client->CALLE,
                'numeroexterior' => $client->numeroexterior,
                'numerointerior' => $client->numerointerior,
                'UsoCFDI' => $client->UsoCFDI,
                'Regimen' => $client->Regimen,
                'pagoForma' => $client->PagoForma,
                'PagoMetodo' => $client->PagoMetodo,
                'CORREO' => $client->CORREO
            ];

            Log::info('Datos completos del cliente listos para devolver', ['data' => $data]);
            return response()->json($data);
        } catch (\Exception $e) {
            Log::error('Error al obtener información del cliente', ['RFC' => $rfc, 'exception' => $e]);
            return response()->json(['error' => 'Error interno del servidor'], 500);
        }
    }

    /**
     * Guarda la información del cliente enviada desde el formulario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveClient(Request $request)
    {
        try {
            Log::info('Intento de creación de nuevo cliente', ['data' => $request->all()]);
            $client = Client::create($request->all());
            Log::info('Nuevo cliente creado con éxito', ['client_id' => $client->id]);
            return response()->json(['message' => 'Cliente guardado exitosamente'], 201);
        } catch (\Exception $e) {
            Log::error('Error al guardar el cliente', ['exception' => $e]);
            return response()->json(['error' => 'Error interno del servidor'], 500);
        }
    }
}

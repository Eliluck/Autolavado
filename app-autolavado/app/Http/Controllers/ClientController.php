<?php
namespace App\Http\Controllers;

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
        Log::info('Iniciando la búsqueda del cliente', ['rfc' => $rfc]);
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

            $client = Client::where('rfc', $rfc)->first();
            if (!$client) {
                Log::info('Cliente no encontrado con el RFC proporcionado', ['rfc' => $rfc]);
                return response()->json([
                    'error' => 'Cliente no encontrado',
                    'paises' => $paises,
                    'usos_cfdi' => $usosCFDI,
                    'regimen_fiscal' => $regimenes,
                    'pagos' => $formasPago,
                    'metodos' => $metodosPago,
                ], 404);
            }

            Log::info('Cliente encontrado, procesando datos adicionales', ['cliente' => $client->id]);
            $data = [
                'nombre' => $client->nombre,
                'rfc' => $client->rfc,
                'pais' => $client->pais,
                'cp' => $client->cp,
                'pobla' => $client->pobla,
                'ciudad' => $client->ciudad,
                'estado' => $client->estado,
                'colonia' => $client->colonia,
                'calle' => $client->calle,
                'numeroexterior' => $client->numeroexterior,
                'numerointerior' => $client->numerointerior,
                'UsoCFDI' => $client->UsoCFDI,
                'regimenFiscal' => $client->Regimen,
                'pagoForma' => $client->PagoForma,
                'PagoMetodo' => $client->PagoMetodo,
                'email' => $client->correo,
                'paises' => $paises,
                'usos_cfdi' => $usosCFDI,
                'regimen_fiscal' => $regimenes,
                'pagos' => $formasPago,
                'metodos' => $metodosPago
            ];

            $cps = DirSatCP::where('PaisCod', $client->pais)->get(['CP'])->toArray();
            Log::info('Códigos postales obtenidos para el país del cliente', ['pais' => $client->pais, 'cps' => $cps]);
            $colonias = DirSatCol::where('CP', $client->cp)->get(['ColCod', 'ColNom'])->toArray();
            Log::info('Colonias obtenidas para el código postal del cliente', ['cp' => $client->cp, 'colonias' => $colonias]);
            $data['cps'] = $cps;
            $data['colonias'] = $colonias;

            Log::info('Datos completos del cliente listos para devolver', ['data' => $data]);
            return response()->json($data);
        } catch (\Exception $e) {
            Log::error('Error al obtener información del cliente', ['rfc' => $rfc, 'exception' => $e]);
            return response()->json(['error' => 'Error interno del servidor'], 500);
        }
    }
}

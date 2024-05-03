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
        try {
            // Obtener catálogo de países
            $paises = DirSatPais::all()->toArray();
            // Obtener catálogo de usos CFDI
            $usosCFDI = SatUsoCFDI::all()->toArray();
            // Obtener catálogo de regímenes fiscales
            $regimenes = SatRegFisc::all()->toArray();
            // Obtener catálogo de formas de pago
            $formasPago = PagoForma::all()->toArray();
            // Obtener catálogo de métodos de pago
            $metodosPago = PagoMetodo::all()->toArray();

            $client = Client::where('RFC', $rfc)->first();
            if (!$client) {
                // Cliente no encontrado, devolver solo catálogos
                Log::info('Cliente no encontrado', ['RFC' => $rfc]);
                return response()->json([
                    'error' => 'Cliente no encontrado',
                    'paises' => $paises,
                    'usos_cfdi' => $usosCFDI,
                    'regimen_fiscal' => $regimenes,
                    'pagos' => $formasPago,
                    'metodos' => $metodosPago,
                ], 404);
            }
            // Cliente encontrado, continuar obteniendo información relacionada
            $data = [];
            $data['nombre'] = $client->nombre;
            $data['rfc'] = $client->rfc;
            $data['pais'] = $client->pais;
            $data['cp'] = $client->cp;
            $data['pobla'] = $client->pobla;
            $data['ciudad'] = $client->ciudad;
            $data['estado'] = $client->estado;
            $data['colonia'] = $client->colonia;
            $data['calle'] = $client->calle;
            $data['numeroexterior'] = $client->numeroexterior;
            $data['numerointerior'] = $client->numerointerior;
            $data['UsoCFDI'] = $client->UsoCFDI;
            $data['regimenFiscal'] = $client->Regimen;
            $data['pagoForma'] = $client->PagoForma;
            $data['PagoMetodo'] = $client->PagoMetodo;
            $data['email'] = $client->correo;
            // Agregar catálogos al resultado
            $data['paises'] = $paises;
            $data['usos_cfdi'] = $usosCFDI;
            $data['regimen_fiscal'] = $regimenes;
            $data['pagos'] = $formasPago;
            $data['metodos'] = $metodosPago;
            // Obtener códigos postales
            $cps = DirSatCP::where('PaisCod', $client->pais)->get(['CP'])->toArray();
            $data['cps'] = $cps;
            // Obtener colonias
            $colonias = DirSatCol::where('CP', $client->cp)->get(['ColCod', 'ColNom'])->toArray();
            $data['colonias'] = $colonias;
            return response()->json($data);
        } catch (\Exception $e) {
            Log::error('Error al obtener información del cliente', ['exception' => $e]);
            return response()->json(['error' => 'Error interno del servidor'], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class CheckRFCController extends Controller
{
    /**
     * Check if RFC exists with a given Sucursal
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkRFC(Request $request)
    {
        try {
            // Registrar el recibimiento de la solicitud
            Log::info("Recibida solicitud para verificar RFC y Sucursal", ['data' => $request->all()]);

            // Validar la solicitud de entrada
            $validated = $request->validate([
                'RFC' => 'required|string|max:20',
                'Sucursal' => 'required|string|max:100',
            ]);

            // Registrar datos validados
            Log::info("Datos validados para la consulta de RFC y Sucursal", ['validated' => $validated]);

            // Obtener el RFC y la Sucursal de la solicitud
            $rfc = $request->input('RFC');
            $sucursal = $request->input('Sucursal');

            // Guardar el RFC y la Sucursal en la sesión
            $request->session()->put('RFC', $rfc);
            $request->session()->put('Sucursal', $sucursal);

            // Registrar el guardado en la sesión
            Log::info("RFC y Sucursal guardados en la sesión", ['RFC' => $rfc, 'Sucursal' => $sucursal]);

            // Buscar el RFC en la base de datos
            $client = Client::where('RFC', $rfc)->first();

            // Registrar intento de búsqueda
            Log::info("Intentando buscar en la base de datos", ['RFC' => $rfc]);

            if ($client) {
                // Registrar el resultado de la búsqueda
                if ($client->Sucursal === $sucursal) {
                    Log::info("RFC y Sucursal coinciden en la base de datos", ['RFC' => $rfc, 'Sucursal' => $sucursal]);
                    return response()->json(['exists' => true]);
                } else {
                    Log::info("RFC encontrado pero la Sucursal no coincide", ['RFC' => $rfc, 'Sucursal' => $sucursal]);
                    return response()->json(['exists' => true]);
                }
            } else {
                Log::info("RFC no encontrado en la base de datos", ['RFC' => $rfc]);
                return response()->json(['exists' => false]);
            }
        } catch (\Exception $e) {
            // Registrar el error en el log
            Log::error("Error en la consulta de RFC y Sucursal", [
                'exception' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'RFC' => $rfc ?? 'N/A',
                'Sucursal' => $sucursal ?? 'N/A'
            ]);

            // Devolver una respuesta JSON indicando el error
            return response()->json(['error' => 'Error procesando la solicitud'], 500);
        }
    }
}

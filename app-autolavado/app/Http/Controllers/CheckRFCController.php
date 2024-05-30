<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class CheckRFCController extends Controller
{
    /**
     * Check if RFC exists.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkRFC(Request $request)
    {
        try {
            // Registrar el recibimiento de la solicitud
            Log::info("Recibida solicitud para verificar RFC", ['data' => $request->all()]);

            // Validar la solicitud de entrada
            $validated = $request->validate([
                'RFC' => 'required|string|max:20',
            ]);

            // Registrar datos validados
            Log::info("Datos validados para la consulta de RFC", ['validated' => $validated]);

            // Obtener el RFC de la solicitud
            $rfc = $request->input('RFC');

            // Guardar el RFC en la sesión
            $request->session()->put('RFC', $rfc);

            // Registrar el guardado en la sesión
            Log::info("RFC guardado en la sesión", ['RFC' => $rfc]);

            // Buscar el RFC en la base de datos
            $client = Client::where('RFC', $rfc)->first();

            // Registrar intento de búsqueda
            Log::info("Intentando buscar en la base de datos", ['RFC' => $rfc]);

            // Registrar el resultado de la búsqueda
            if ($client) {
                Log::info("RFC encontrado en la base de datos", ['RFC' => $rfc]);
                return response()->json(['exists' => true]);
            } else {
                Log::info("RFC no encontrado en la base de datos", ['RFC' => $rfc]);
                return response()->json(['exists' => false]);
            }
        } catch (\Exception $e) {
            // Registrar el error en el log
            Log::error("Error en la consulta de RFC", [
                'exception' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'RFC' => $rfc ?? 'N/A'
            ]);

            // Devolver una respuesta JSON indicando el error
            return response()->json(['error' => 'Error procesando la solicitud'], 500);
        }
    }
}

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
            'rfc' => 'required|string|max:20',
            'sucursal' => 'required|string|max:50',
        ]);

        // Registrar datos validados
        Log::info("Datos validados para la consulta de RFC", ['validated' => $validated]);

        // Obtener el RFC y la sucursal de la solicitud
        $rfc = $request->input('rfc');
        $sucursal = $request->input('sucursal');

        // Guardar la sucursal en la sesión
        $request->session()->put('sucursal', $sucursal);
        $request->session()->put('rfc', $rfc);

        // Registrar el guardado en la sesión
        Log::info("RFC y sucursal guardados en la sesión", ['rfc' => $rfc, 'sucursal' => $sucursal]);

        // Buscar el RFC en la base de datos
        $client = Client::where('rfc', $rfc)->first();

        // Registrar intento de búsqueda
        Log::info("Intentando buscar en la base de datos", ['rfc' => $rfc]);

        // Registrar el resultado de la búsqueda
        if ($client) {
            Log::info("RFC encontrado en la base de datos", ['rfc' => $rfc]);
            return response()->json(['exists' => true]);
        } else {
            Log::info("RFC no encontrado en la base de datos", ['rfc' => $rfc]);
            return response()->json(['exists' => false]);
        }
    } catch (\Exception $e) {
        // Registrar el error en el log
        Log::error("Error en la consulta de RFC", [
            'exception' => $e->getMessage(),
            'trace' => $e->getTraceAsString(), // Incluir el stack trace para mayor detalle
            'rfc' => $rfc ?? 'N/A',
            'sucursal' => $sucursal ?? 'N/A'
        ]);

        // Devolver una respuesta JSON indicando el error
        return response()->json(['error' => 'Error procesando la solicitud'], 500);
    }
  }
}


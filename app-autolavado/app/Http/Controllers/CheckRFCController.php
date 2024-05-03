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
        // Validar la solicitud de entrada
        $request->validate([
            'rfc' => 'required|string|max:20',
            'sucursal' => 'required|string|max:50', // Agregar validación para la sucursal
        ]);

        // Obtener el RFC y la sucursal de la solicitud
        $rfc = $request->input('rfc');
        $sucursal = $request->input('sucursal');

        // Guardar la sucursal en la sesión
        $request->session()->put('sucursal', $sucursal);
        $request->session()->put('rfc', $rfc);

        // Buscar el RFC en la base de datos
        $client = Client::where('rfc', $rfc)->first();

        // Registrar información en el log de Laravel
        Log::info("Consulta de RFC: RFC=$rfc, Sucursal=$sucursal");

        // Verificar si el RFC existe
        if ($client) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}

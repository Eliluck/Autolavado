<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\VentaWeb;
use App\Models\Client; // Asegúrate de tener el modelo Client

class VentaController extends Controller
{
    public function getDocumentos(Request $request)
    {
        // Validar que se hayan pasado todos los parámetros
        $request->validate([
            'rfc' => 'required|string|max:13',
            'inicio' => 'required|date_format:Y-m-d',
            'fin' => 'required|date_format:Y-m-d'
        ]);

        Log::info('Solicitud recibida para obtener documentos', [
            'rfc' => $request->input('rfc'),
            'inicio' => $request->input('inicio'),
            'fin' => $request->input('fin')
        ]);

        try {
            $rfc = $request->input('rfc');
            $inicio = $request->input('inicio');
            $fin = $request->input('fin');

            // Buscar el cliente por RFC
            $client = Client::where('RFC', $rfc)->first();

            if (!$client) {
                Log::error('No se encontró el cliente con el RFC proporcionado', ['rfc' => $rfc]);
                return response()->json(['error_code' => 'CLIENT_NOT_FOUND'], 404);
            }

            // Obtener todas las ventas facturadas en el rango de fechas para el cliente encontrado
            $ventas = VentaWeb::select('ventaremota', 'VENTA', 'LogCFDI', 'no_referen', 'f_EMISION', 'importe', 'impuesto', 'moneda', 'UUID')
                ->where('CLIENTE', $client->CLIENTE)
                ->where('estado', 'CO')
                ->where('F_EMISION', '>=', $inicio)
                ->where('F_EMISION', '<=', $fin)
                ->where('tipo_doc', 'FAC')
                ->get();

            Log::info('Documentos recuperados exitosamente', ['cantidad' => count($ventas), 'rfc' => $rfc]);

            // Devuelve los resultados sin formatear para depuración
            return response()->json(['ventas' => $ventas], 200);
        } catch (\Exception $e) {
            Log::error('Excepción en getDocumentos', ['mensaje' => $e->getMessage(), 'rfc' => $rfc]);
            return response()->json(['error_code' => 'exception', 'message' => $e->getMessage()], 500);
        }
    }
}

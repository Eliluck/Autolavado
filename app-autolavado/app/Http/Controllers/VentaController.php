<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\VentaWeb;

class VentaController extends Controller
{
    public function getDocumentos(Request $request)
    {
        Log::info('Solicitud recibida para obtener documentos', [
            'rfc' => $request->input('rfc'),
            'inicio' => $request->input('inicio'),
            'fin' => $request->input('fin')
        ]);
        try {
            // Validar que se hayan pasado todos los parámetros
            $rfc = $request->input('rfc');
            $inicio = $request->input('inicio');
            $fin = $request->input('fin');

            if (empty($rfc)) {
                Log::error('Falta parámetro RFC en la solicitud');
                return response()->json(['error_code' => 'RFC_EMPTY'], 400);
            }
            if (empty($inicio)) {
                Log::error('Falta parámetro de fecha de inicio en la solicitud');
                return response()->json(['error_code' => 'INICIO_NOT_FOUND'], 400);
            }
            if (empty($fin)) {
                Log::error('Falta parámetro de fecha de fin en la solicitud');
                return response()->json(['error_code' => 'FIN_NOT_FOUND'], 400);
            }

            // Obtener todas las ventas facturadas en el rango de fechas
            $ventas = VentaWeb::select('ventas_web.ventaremota', 'ventas_web.VENTA', 'ventas_web.LogCFDI', 'ventas_web.no_referen', 'ventas_web.f_emision', 'Ventas_Web.importe', 'ventas_web.impuesto', 'ventas_web.moneda', 'ventas_web.UUID')
                ->leftJoin('client', 'client.CLIENTE', '=', 'Ventas_Web.CLIENTE')
                ->where('client.RFC', $rfc)
                ->where('Ventas_Web.estado', 'CO')
                ->where('Ventas_Web.f_emision', '>=', $inicio)
                ->where('Ventas_Web.f_emision', '<=', $fin)
                ->where('Ventas_Web.tipo_doc', 'FAC')
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

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
            $ventas = VentaWeb::select('ventaremota', 'venta', 'LogCFDI', 'no_referen', 'f_emision', 'importe', 'impuesto', 'moneda', 'UUID')
                ->leftJoin('clients', 'clients.cliente', '=', 'Ventas_Web.cliente')
                ->where('clients.rfc', $rfc)
                ->where('Ventas_Web.estado', 'CO')
                ->where('Ventas_Web.f_emision', '>=', $inicio)
                ->where('Ventas_Web.f_emision', '<=', $fin)
                ->where('Ventas_Web.tipo_doc', 'FAC')
                ->get();
            Log::info('Documentos recuperados exitosamente', ['cantidad' => count($ventas), 'rfc' => $rfc]);
            // Formatear y preparar los datos de ventas
            $ventasFormateadas = [];
            foreach ($ventas as $venta) {
                $total = $venta->importe + $venta->impuesto;
                $ventaFormateada = [
                    'ventaremota' => $venta->ventaremota,
                    'venta' => $venta->venta,
                    'LogCFDI' => rawurlencode($venta->LogCFDI),
                    'no_referen' => $venta->no_referen,
                    'f_emision' => $venta->f_emision,
                    'importe' => round($venta->importe, 2),
                    'impuesto' => round($venta->impuesto, 2),
                    'total' => number_format($total, 2),
                    'moneda' => utf8_encode($venta->moneda),
                    'UUID' => $venta->UUID,
                ];
                array_push($ventasFormateadas, $ventaFormateada);
            }
            // Devolver las ventas filtradas
            return response()->json(['ventas' => $ventasFormateadas], 200);

        } catch (\Exception $e) {
            Log::error('Excepción en getDocumentos', ['mensaje' => $e->getMessage(), 'rfc' => $rfc]);
            return response()->json(['error_code' => 'exception', 'message' => $e->getMessage()], 500);
        }
    }
}

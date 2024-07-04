<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VentaWeb;
use App\Models\Client;
use App\Models\Sucursal;
use Illuminate\Support\Facades\Log;

class ReportVentaController extends Controller
{
    // Mostrar todas las ventas con la opción de filtrar por sucursal y fechas de emisión
    public function index(Request $request)
    {
        // Recoger los parámetros de la solicitud
        $sucursalId = $request->input('sucursal_id');
        $fechaInicial = $request->input('F_EMISION_inicial');
        $fechaFinal = $request->input('F_EMISION_final');

        Log::info('Consulta de ventas', [
            'sucursal_id' => $sucursalId,
            'fecha_inicial' => $fechaInicial,
            'fecha_final' => $fechaFinal
        ]);

        // Obtener las sucursales
        $sucursales = Sucursal::all();

        if ($sucursalId) {
            // Filtrar por sucursal y rango de fechas si están presentes
            $ventas = VentaWeb::where('Sucursal', $sucursalId);

            if ($fechaInicial && $fechaFinal) {
                $ventas = $ventas->whereDate('F_EMISION', '>=', $fechaInicial)
                    ->whereDate('F_EMISION', '<=', $fechaFinal);
            }

            // Unir con la tabla Client para obtener el nombre del cliente
            $ventas = $ventas->join('client', 'ventas_web.CLIENTE', '=', 'client.CLIENTE')
                ->select('ventas_web.F_EMISION', 'ventas_web.VENTA', 'client.NOMBRE as cliente', 'ventas_web.IMPORTE', 'ventas_web.PagoForma')
                ->get();

            Log::info('Ventas filtradas por sucursal y rango de fechas', ['cantidad' => count($ventas)]);
        } else {
            // Si no hay sucursal seleccionada, no devolver ventas
            $ventas = [];
            Log::info('Consulta de todas las sucursales');
        }

        return response()->json([
            'sucursales' => $sucursales,
            'ventas' => $ventas
        ]);
    }

    // Mostrar una venta específica junto con los datos del cliente correspondiente
    public function show($id)
    {
        Log::info('Consulta de venta específica', ['venta_id' => $id]);
        $venta = VentaWeb::select('F_EMISION', 'VENTA', 'CLIENTE', 'IMPORTE', 'PagoForma')->find($id);
        if (!$venta) {
            Log::error('Venta no encontrada', ['venta_id' => $id]);
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        // Obtener el cliente asociado a la venta de forma independiente
        $cliente = Client::select('CLIENTE', 'NOMBRE', 'DIRECCION', 'CIUDAD', 'ESTADO', 'TELEFONO')->where('CLIENTE', $venta->CLIENTE)->first();
        Log::info('Cliente recuperado para la venta', ['venta_id' => $id, 'cliente_id' => $venta->CLIENTE]);

        return response()->json([
            'venta' => $venta,
            'cliente' => $cliente
        ]);
    }

    // Crear una nueva venta
    public function store(Request $request)
    {
        Log::info('Intento de creación de nueva venta', ['data' => $request->all()]);
        $venta = VentaWeb::create($request->only('F_EMISION', 'VENTA', 'CLIENTE', 'IMPORTE', 'PagoForma'));
        Log::info('Nueva venta creada con éxito', ['venta_id' => $venta->VENTA]);
        return response()->json($venta, 201);
    }
}

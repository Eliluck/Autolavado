<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VentaWeb;
use App\Models\Client;
use Illuminate\Support\Facades\Log;
class ReportVentaController extends Controller
{
    // Mostrar todas las ventas con la opción de filtrar por fecha de emisión inicial y final
    public function index(Request $request)
    {
        // Recoger los parámetros de fecha de la solicitud
        $fechaInicial = $request->input('F_EMISION_inicial');
        $fechaFinal = $request->input('F_EMISION_final');
        Log::info('Consulta de ventas', ['fecha_inicial' => $fechaInicial, 'fecha_final' => $fechaFinal]);
        // Filtrar por rango de fechas si ambos parámetros están presentes
        if ($fechaInicial && $fechaFinal) {
            $ventas = VentaWeb::whereDate('F_EMISION', '>=', $fechaInicial)
                              ->whereDate('F_EMISION', '<=', $fechaFinal)
                              ->get();
            Log::info('Ventas filtradas por rango de fechas', ['cantidad' => count($ventas)]);
        } else {
            $ventas = VentaWeb::all();
            Log::info('Consulta de todas las ventas');
        }
        return response()->json($ventas);
    }
    // Mostrar una venta específica junto con los datos del cliente correspondiente
    public function show($id)
    {
        Log::info('Consulta de venta específica', ['venta_id' => $id]);
        $venta = VentaWeb::find($id);
        if (!$venta) {
            Log::error('Venta no encontrada', ['venta_id' => $id]);
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        // Obtener el cliente asociado a la venta de forma independiente
        $cliente = Client::where('CLIENTE', $venta->CLIENTE)->first();
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
        $venta = VentaWeb::create($request->all());
        Log::info('Nueva venta creada con éxito', ['venta_id' => $venta->VENTA]);
        return response()->json($venta, 201);
    }
}

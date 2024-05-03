<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\VentaWeb;

class FacturacionController extends Controller
{
    public function facturarTicket(Request $request)
    {
        Log::info('Inicio de facturación de ticket', ['ticket' => $request->input('ticket'), 'rfc' => $request->input('rfc')]);
        try {
            // Validar que se hayan pasado todos los parámetros
            $ticket = $request->input('ticket');
            $rfc = $request->input('rfc');
            if (empty($ticket)) {
                Log::warning('Facturación fallida: Ticket no proporcionado');
                return response()->json(['error_code' => 'TICKET_NOT_FOUND'], 400);
            }
            if (empty($rfc)) {
                Log::warning('Facturación fallida: RFC no proporcionado');
                return response()->json(['error_code' => 'RFC_NOT_FOUND'], 400);
            }
            // Verificar si el ticket existe
            $exists = VentaWeb::where(DB::raw("LTRIM(RTRIM(serieDocumento)) + CAST(ventaremota AS VARCHAR(20))"), strtoupper($ticket))->exists();
            if (!$exists) {
                Log::warning('Facturación fallida: Ticket no existe', ['ticket' => $ticket]);
                return response()->json(['error_code' => 'TICKET_NOT_EXISTS'], 400);
            }
            // Obtener el cliente basado en el RFC
            $cliente = DB::table('clients')->where('rfc', strtoupper(trim($rfc)))->value('cliente');
            if (!$cliente) {
                Log::warning('Facturación fallida: Código de cliente no encontrado', ['rfc' => $rfc]);
                return response()->json(['error_code' => 'CLIENTE_COD_NOT_EXISTS'], 400);
            }
            // Facturar el ticket
            $venta = VentaWeb::where(DB::raw("LTRIM(RTRIM(serieDocumento)) + CAST(ventaremota AS VARCHAR(20))"), strtoupper($ticket))
                ->where('estado', 'CO')
                ->where('enfac', 0)
                ->where('ventaref', 0)
                ->first();
            if ($venta) {
                $venta->update(['cliente' => $cliente, 'enfac' => 1]);
                Log::info('Facturación exitosa', ['ticket' => $ticket]);
                return response()->json(['message' => 'Ticket facturado correctamente'], 200);
            } else {
                Log::error('Facturación fallida: Ticket ya fue facturado o condiciones no cumplidas', ['ticket' => $ticket]);
                return response()->json(['error_code' => 'TICKET_FACTURADO'], 400);
            }
        } catch (\Exception $e) {
            Log::error('Error de sistema en facturación', ['exception' => $e->getMessage()]);
            return response()->json(['error_code' => 'exception', 'message' => $e->getMessage()], 500);
        }
    }
}

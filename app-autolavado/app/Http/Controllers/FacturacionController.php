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
        Log::info('Inicio de facturación de ticket', ['ticket' => $request->input('ticket'), 'RFC' => $request->input('RFC')]);

        try {
            // Validar que se hayan pasado todos los parámetros
            $ticket = $request->input('ticket');
            $rfc = $request->input('RFC');

            if (empty($ticket)) {
                Log::warning('Facturación fallida: Ticket no proporcionado');
                return response()->json(['error_code' => 'TICKET_NOT_FOUND'], 400);
            }

            if (empty($rfc)) {
                Log::warning('Facturación fallida: RFC no proporcionado');
                return response()->json(['error_code' => 'RFC_NOT_FOUND'], 400);
            }

            // Verificar si el ticket existe
            $exists = VentaWeb::where('ticket',($ticket))->exists();

            if (!$exists) {
                Log::warning('Facturación fallida: Ticket no existe', ['ticket' => $ticket]);
                return response()->json(['error_code' => 'TICKET_NOT_EXISTS'], 400);
            }

            // Obtener el cliente basado en el RFC
            $cliente = DB::table('client')->where('RFC', strtoupper(trim($rfc)))->value('CLIENTE');

            if (!$cliente) {
                Log::warning('Facturación fallida: Código de cliente no encontrado', ['RFC' => $rfc]);
                return response()->json(['error_code' => 'CLIENTE_COD_NOT_EXISTS'], 400);
            }

            // Facturar el ticket
            $venta = VentaWeb::where( 'ticket',($ticket))
                ->where('estado', 'CO')
                ->where('enfac', 0)
                ->where('ventaref', 0)
                ->first();

            if ($venta) {
                $venta->enfac = 1;
                $venta->save();

                Log::info('Venta actualizada', ['venta' => $venta]);

                // Obtener la sucursal asociada a la venta
                $sucursal = $venta->SUCURSAL; // Ajustar esto según la estructura de tu modelo

                Log::info('Facturación exitosa', ['ticket' => $ticket, 'sucursal' => $sucursal]);
                return response()->json(['message' => 'Ticket facturado correctamente', 'sucursal' => $sucursal], 200);
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

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DirSatEdo;
use Illuminate\Support\Facades\Log;
class DirSatEdoController extends Controller
{
    /**
     * Retorna el estado correspondiente al código postal (CP) dado en formato JSON.
     *
     * @param  int  $cp
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEstadoPorCP($cp)
    {
        // Realiza la consulta para obtener el estado correspondiente al CP
        $estado = DirSatEdo::where('CP', $cp)->get();

        // Registra la consulta en el log de Laravel
        Log::info("Retrieved state by postal code: CP=$cp");
        // Retorna el estado en formato JSON
        return response()->json($estado);
    }
}

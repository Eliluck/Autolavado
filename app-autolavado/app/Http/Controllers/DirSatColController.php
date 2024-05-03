<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DirSatCol;
use Illuminate\Support\Facades\Log;
class DirSatColController extends Controller
{
    /**
     * Display a listing of resources based on CP.
     *
     * @param  string  $cp
     * @return \Illuminate\Http\Response
     */
    public function getByCP($cp)
    {
        // Obtener todas las colonias de DirSatCol que estén asociadas al código postal proporcionado
        $dirSatCols = DirSatCol::where('CP', $cp)->get();
        // Registro de log
        Log::info("Retrieved colonies for CP: $cp");
        return response()->json($dirSatCols);
    }
}

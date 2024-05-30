<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DirSatLoc;
use Illuminate\Support\Facades\Log;
class DirSatLocController extends Controller
{
    /**
     * Display the resource based on postal code.
     *
     * @param  string  $LocCod
     * @return \Illuminate\Http\Response
     */
    public function getByLocCod($LocCod)
    {
        // Obtener el primer registro de DirSatLoc que tenga el código postal proporcionado
        $dirSatLoc = DirSatLoc::where('LocCod', $LocCod)->first();

        // Registrar información en el log de Laravel
        Log::info("Consulta de localidad por código postal: LocCod=$LocCod");

        return response()->json($dirSatLoc);
    }
}

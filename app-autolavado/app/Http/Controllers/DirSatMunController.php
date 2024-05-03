<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DirSatMun;
use Illuminate\Support\Facades\Log;
class DirSatMunController extends Controller
{
    /**
     * Display a listing of resources based on municipality code.
     *
     * @param  string  $municipioCode
     * @return \Illuminate\Http\Response
     */
    public function getByMunicipioCode($municipioCode)
    {
        // Obtener todos los registros de DirSatMun que tengan el código de municipio proporcionado
        $dirSatMuns = DirSatMun::where('MunicipioCod', $municipioCode)->get();

        // Registro de log
        Log::info("Retrieved municipalities by code: MunicipioCod=$municipioCode");

        return response()->json($dirSatMuns);
    }
}

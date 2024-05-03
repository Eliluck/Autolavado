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
     * @param  string  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function getByPostalCode($postalCode)
    {
        // Obtener el primer registro de DirSatLoc que tenga el código postal proporcionado
        $dirSatLoc = DirSatLoc::where('CP', $postalCode)->first();

        // Registrar información en el log de Laravel
        Log::info("Consulta de localidad por código postal: CP=$postalCode");

        return response()->json($dirSatLoc);
    }
}

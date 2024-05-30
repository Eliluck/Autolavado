<?php

namespace App\Http\Controllers;

use App\Models\DirSatCP;
use Illuminate\Support\Facades\Log;

class DirSatCPController extends Controller
{
    /**
     * Display the municipality, city, and state for the given postal code.
     *
     * @param  string  $CP
     * @return \Illuminate\Http\JsonResponse
     */
    public function byGetCP($CP)
    {
        // Retrieve the record from DirSatCP that has the provided postal code
        $dirSatCP = DirSatCP::where('CP', $CP)->first();

        if (!$dirSatCP) {
            Log::info("No se encontró registro con el código postal: $CP");
            return response()->json(['error' => 'Código postal no encontrado'], 404);
        }

        // Log the retrieval of records filtered by postal code
        Log::info("Registro encontrado para el código postal: $CP");

        // Return the municipality, city, and state for the given postal code
        return response()->json([
            'municipio' => $dirSatCP->MunCod,
            'ciudad' => $dirSatCP->LocCod,
            'estado' => $dirSatCP->EdoCod
        ]);
    }
}

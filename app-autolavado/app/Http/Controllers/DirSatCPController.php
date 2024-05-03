<?php
namespace App\Http\Controllers;
use App\Models\DirSatCP;
use Illuminate\Support\Facades\Log;
class DirSatCPController extends Controller
{
    /**
     * Display a listing of the resource filtered by country code.
     *
     * @param  string  $countryCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function byCountryCode($countryCode)
    {
        // Retrieve all records from DirSatCP that have the provided country code
        $dirSatCPs = DirSatCP::where('PaisCod', $countryCode)->get();
        // Log the retrieval of records filtered by country code
        Log::info("Retrieved records filtered by country code: $countryCode");
        return response()->json($dirSatCPs);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index()
    {
        try {
            $sucursales = Sucursal::pluck('Sucursal')->toArray();
            return response()->json($sucursales);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener las sucursales'], 500);
        }
    }
}

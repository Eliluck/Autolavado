<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Providers\RFCValidator;
use Illuminate\Support\Facades\Log;

class RFCValidationController extends Controller
{
    public function validateRFC(Request $request)
    {
        $rfc = $request->input('RFC');
        // Validar que se proporcionó un RFC
        if (empty($rfc)) {
            return response()->json(['error' => 'El RFC es requerido'], 400);
        }
        // Creamos una instancia de RFCValidator
        $validator = new RFCValidator();
        try {
            // Llamamos al método validate de RFCValidator
            $isValid = $validator->validate($rfc);
            if (!$isValid) {
                return response()->json(['error' => 'RFC inválido'], 422);
            }
            // Registrar la validación exitosa en el log
            Log::info("RFC $rfc validado exitosamente");
        } catch (\Exception $e) {
            // Si ocurre un error, lanzamos una ValidationException de Laravel
            Log::error("Error al validar RFC $rfc: " . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 422);
        }
        // Si no hay errores, devolvemos una respuesta exitosa con la validez del RFC
        return response()->json(['valid' => $isValid], 200);
    }
}

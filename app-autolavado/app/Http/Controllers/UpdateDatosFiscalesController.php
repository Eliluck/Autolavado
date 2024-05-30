<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class UpdateDatosFiscalesController extends Controller
{
    public function updateDatosFiscales(Request $request)
    {
        // Valida los parámetros enviados
        $request->validate([
            'NOMBRE' => 'required',
            'CALLE' => 'required',
            'COLONIA' => 'required',
            'POBLA' => 'required',
            'numerointerior' => 'required',
            'numeroexterior' => 'required',
            'CP' => 'required',
            'CIUDAD' => 'required',
            'ESTADO' => 'required',
            'PAIS' => 'required',
            'CORREO' => 'required|email',
            'RFC' => 'required',
        ]);

        // Actualiza los datos fiscales
        $actualizado = $this->updateClienteDatosFiscales($request);

        if ($actualizado) {
            // Obtiene el cliente actualizado
            $cliente = Client::where('RFC', $request->input('RFC'))->first();
            return response()->json(['message' => 'Datos fiscales actualizados correctamente', 'cliente' => $cliente], 200);
        } else {
            return response()->json(['error' => 'Error al actualizar los datos fiscales'], 400);
        }
    }

    private function updateClienteDatosFiscales(Request $request)
    {
        // Busca el cliente por RFC exacto
        $cliente = Client::where('RFC', $request->input('RFC'))->first();

        if ($cliente) {
            $cliente->update([
                'exportado' => 0,
                'NOMBRE' => $request->input('NOMBRE'),
                'CALLE' => $request->input('CALLE'),
                'COLONIA' => $request->input('COLONIA'),
                'numerointerior' => $request->input('numerointerior'),
                'numeroexterior' => $request->input('numeroexterior'),
                'CP' => $request->input('CP'),
                'CIUDAD' => $request->input('CIUDAD'),
                'POBLA' => $request->input('POBLA'),
                'ESTADO' => $request->input('ESTADO'),
                'PAIS' => $request->input('PAIS'),
                'CORREO' => $request->input('CORREO'),
            ]);
            return true;
        }

        return false;
    }
}

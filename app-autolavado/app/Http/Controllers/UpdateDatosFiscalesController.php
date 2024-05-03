<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
use Response;
class UpdateDatosFiscalesController extends Controller
{
    public function updateDatosFiscales(Request $request)
    {
        // Valida los parámetros enviados
        $request->validate([
            'razon_social' => 'required',
            'calle' => 'required',
            'colonia' => 'required',
            'numero_interior' => 'required',
            'numero_exterior' => 'required',
            'cp' => 'required',
            'ciudad' => 'required',
            'estado' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'rfc' => 'required',
        ]);
        // Actualiza los datos fiscales
        $actualizado = $this->updateClienteDatosFiscales(
            $request->input('razon_social'),
            $request->input('calle'),
            $request->input('colonia'),
            $request->input('numero_interior'),
            $request->input('numero_exterior'),
            $request->input('cp'),
            $request->input('ciudad'),
            $request->input('estado'),
            $request->input('pais'),
            $request->input('email'),
            $request->input('rfc')
        );
        if ($actualizado) {
            return response()->json(['message' => 'Datos fiscales actualizados correctamente'], 200);
        } else {
            return response()->json(['error' => 'Error al actualizar los datos fiscales'], 400);
        }
    }
    private function updateClienteDatosFiscales($razon_social, $calle, $colonia, $numero_interior, $numero_exterior, $cp, $ciudad, $estado, $pais, $email, $rfc)
    {
        $cliente = Client::where('rfc', 'LIKE', '%' . trim($rfc) . '%')->first();
        if ($cliente) {
            $cliente->update([
                'exportado' => 0,
                'nombre' => strtoupper($razon_social),
                'calle' => strtoupper($calle),
                'colonia' => strtoupper($colonia),
                'numerointerior' => strtoupper($numero_interior),
                'numeroexterior' => strtoupper($numero_exterior),
                'cp' => strtoupper($cp),
                'ciudad' => strtoupper($ciudad),
                'pobla' => strtoupper($ciudad),
                'localidad' => strtoupper($ciudad),
                'estado' => strtoupper($estado),
                'pais' => strtoupper($pais),
                'correo' => $email,
            ]);
            return true;
        }
        return false;
    }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class SatUsoCFDI extends Model
{
    protected $table = 'sat_usocfdi';
    protected $fillable = [
        'Codigo',
        'Descrip',
        'Usuario',
    ];
    // Opcionalmente, puedes definir el nombre de la clave primaria si es diferente de 'id'
    protected $primaryKey = 'Codigo';
    // Opcionalmente, puedes deshabilitar las marcas de tiempo
    public $timestamps = false;
    // Otras configuraciones o métodos si son necesarios
    /**
     * Método para registrar un nuevo uso de CFDI.
     *
     * @param array $data
     * @return SatUsoCFDI|null
     */
    public static function registrarUsoCFDI(array $data)
    {
        try {
            $nuevoUsoCFDI = SatUsoCFDI::create($data);
            Log::info('Nuevo uso de CFDI registrado', ['codigo' => $nuevoUsoCFDI->Codigo]);
            return $nuevoUsoCFDI;
        } catch (\Exception $e) {
            Log::error('Error al registrar nuevo uso de CFDI', ['exception' => $e]);
            return null;
        }
    }
}

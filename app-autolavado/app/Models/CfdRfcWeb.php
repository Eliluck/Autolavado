<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class CfdRfcWeb extends Model
{
    use HasFactory;
    protected $table = 'cdf_rfc_web';
    public $timestamps = false; // Confirmar que no se manejan timestamps
    protected $fillable = [
        'RFC',
        'regimenfiscal',
        'Nombre',
        'Calle',
        'NumeroExterior',
        'NumeroInterior',
        'Colonia',
        'CP',
        'Localidad',
        'Municipio',
        'Estado',
        'Pais',
        'Certificado',
        'llave',
        'Clave',
        'Formato',
    ];
    /**
     * The "booted" method of the model.
     * Utiliza este método para definir los eventos de modelo.
     */
    protected static function booted()
    {
        // Evento al crear un registro nuevo
        static::created(function ($cfdRfcWeb) {
            Log::info('Nuevo registro CFD_RFC_Web creado', ['id' => $cfdRfcWeb->id]);
        });
        // Evento al actualizar un registro
        static::updated(function ($cfdRfcWeb) {
            Log::info('Registro CFD_RFC_Web actualizado', ['id' => $cfdRfcWeb->id]);
        });
        // Evento antes de eliminar un registro
        static::deleting(function ($cfdRfcWeb) {
            Log::warning('Registro CFD_RFC_Web siendo eliminado', ['id' => $cfdRfcWeb->id]);
        });
    }
}

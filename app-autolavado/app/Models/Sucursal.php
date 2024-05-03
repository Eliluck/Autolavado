<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'CFD_Suc_Web';
    protected $fillable = [
        'Sucursal',
        'Calle',
        'NumeroExterior',
        'NumeroInterior',
        'Colonia',
        'CP',
        'Localidad',
        'Municipio',
        'Estado',
        'Pais',
        'Serie',
        'Folio',
        'SerieTck',
        'PreCte',
    ];
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
    protected static function booted()
    {
        static::created(function ($sucursal) {
            Log::info('Nueva sucursal creada', ['id' => $sucursal->id]);
        });
        static::updated(function ($sucursal) {
            Log::info('Sucursal actualizada', ['id' => $sucursal->id]);
        });
        static::deleted(function ($sucursal) {
            Log::info('Sucursal eliminada', ['id' => $sucursal->id]);
        });
    }
}

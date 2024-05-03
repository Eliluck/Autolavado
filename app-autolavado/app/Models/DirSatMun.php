<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class DirSatMun extends Model
{
    protected $table = 'dir_sat_mun'; // Nombre correcto de la tabla en minúsculas
    protected $primaryKey = 'MunCod'; // Clave primaria correcta
    public $incrementing = false; // Indica que la clave primaria no es autoincremental
    public $timestamps = false; // No se manejan timestamps en esta tabla

    protected $fillable = [
        'EdoCod', 'MunCod', 'MunNom',
    ];

    protected $casts = [
        'MunNom' => 'string',
    ];

    protected static function boot()
    {
        parent::boot();
        static::retrieved(function ($dirSatMun) {
            Log::info("Retrieved municipality: EdoCod=$dirSatMun->EdoCod, MunCod=$dirSatMun->MunCod");
        });
    }
}

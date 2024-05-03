<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class DirSatPais extends Model
{
    protected $table = 'dir_sat_pais'; // Asegúrate de que el nombre de la tabla esté correcto

    protected $primaryKey = 'PaisCod'; // Establece PaisCod como clave primaria
    public $incrementing = false; // Indica que la clave primaria no es autoincremental
    public $timestamps = false; // Establece si la tabla debe tener timestamps

    protected $fillable = [
        'PaisCod',
        'PaisNom',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            Log::info('Nuevo registro creado en la tabla DirStaPais', ['PaisCod' => $model->PaisCod]);
        });

        static::updated(function ($model) {
            Log::info('Registro actualizado en la tabla DirStaPais', ['PaisCod' => $model->PaisCod]);
        });

        static::deleted(function ($model) {
            Log::info('Registro eliminado en la tabla DirStaPais', ['PaisCod' => $model->PaisCod]);
        });
    }
}

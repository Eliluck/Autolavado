<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class SatRegFisc extends Model
{
    protected $table = 'sat_regfisc';
    public $timestamps = false; // Confirmar que no se manejan timestamps
    protected $fillable = [
        'Regimen',
        'Descrip',
        'Usuario'
    ];
    protected static function booted()
    {
        static::created(function ($satRegFisc) {
            Log::info('Nuevo régimen fiscal creado', [
                'regimen' => $satRegFisc->Regimen,
                'descripcion' => $satRegFisc->Descrip,
                'usuario' => $satRegFisc->Usuario
            ]);
        });
        static::updated(function ($satRegFisc) {
            Log::info('Régimen fiscal actualizado', [
                'regimen' => $satRegFisc->Regimen,
                'descripcion' => $satRegFisc->Descrip,
                'usuario' => $satRegFisc->Usuario
            ]);
        });
        static::deleted(function ($satRegFisc) {
            Log::info('Régimen fiscal eliminado', [
                'regimen' => $satRegFisc->Regimen,
                'descripcion' => $satRegFisc->Descrip
            ]);
        });
    }
}

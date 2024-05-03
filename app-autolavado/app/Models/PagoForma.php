<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class PagoForma extends Model
{
    protected $table = 'PagoFormas'; // Confirmar el nombre correcto de la tabla
    public $timestamps = false; // Confirmar que no se manejan timestamps
    protected $fillable = [
        'Codigo',
        'Descrip',
        'Usuario',
        'UsuFecha',
        'UsuHora'
    ];
    protected $casts = [
        'UsuFecha' => 'datetime',
    ];
    protected static function booted()
    {
        static::created(function ($pagoForma) {
            Log::info('Nueva forma de pago creada', [
                'codigo' => $pagoForma->Codigo,
                'descripcion' => $pagoForma->Descrip
            ]);
        });
        static::updated(function ($pagoForma) {
            Log::info('Forma de pago actualizada', [
                'codigo' => $pagoForma->Codigo,
                'descripcion' => $pagoForma->Descrip
            ]);
        });
        static::deleted(function ($pagoForma) {
            Log::info('Forma de pago eliminada', [
                'codigo' => $pagoForma->Codigo
            ]);
        });
    }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class PagoMetodo extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'pagometodo';
    // Nombre de los campos que se pueden asignar masivamente
    protected $fillable = ['Codigo', 'Descrip', 'Usuario', 'UsuFecha', 'UsuHora'];
    // Indica si los campos timestamp están habilitados
    public $timestamps = false;
    // Indica los campos que son fechas
    protected $dates = ['UsuFecha'];
    protected static function booted()
    {
        static::created(function ($pagoMetodo) {
            Log::info('Nuevo método de pago creado', ['codigo' => $pagoMetodo->Codigo, 'descripcion' => $pagoMetodo->Descrip]);
        });
        static::updated(function ($pagoMetodo) {
            Log::info('Método de pago actualizado', ['codigo' => $pagoMetodo->Codigo]);
        });
        static::deleted(function ($pagoMetodo) {
            Log::info('Método de pago eliminado', ['codigo' => $pagoMetodo->Codigo]);
        });
    }
}

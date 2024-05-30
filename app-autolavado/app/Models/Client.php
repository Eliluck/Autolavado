<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Factories\Factory;

class Client extends Model
{


    protected $table = 'client';
    protected $primaryKey = 'CLIENTE'; // Especifica la clave primaria
    public $timestamps = false;
    protected $fillable = [
        'CLIENTE', 'NOMBRE', 'CALLE', 'NUMERO', 'COLONIA', 'POBLA', 'CIUDAD', 'ESTADO', 'PAIS',
        'TELEFONO', 'DIAS', 'CREDITO', 'DESC1', 'DESC2', 'DESC3', 'DESC4', 'DESC5', 'RFC', 'TIPO',
        'CONTACTO', 'COBRADOR', 'VEND', 'PRECIO', 'CP', 'PROSPECT', 'REVISION', 'OBSERV', 'ZONA',
        'CORREO', 'URL', 'SALDO', 'USUARIO', 'USUHORA', 'USUFECHA', 'PROVEEDOR', 'CURB', 'CORTE',
        'COBRO', 'CONCEPTO', 'INGRESO', 'bloqueado', 'claveweb', 'emailcobranza', 'embarcar',
        'comision', 'foto', 'puntos', 'recomendado', 'nuevo', 'F_nac', 'sexo', 'email', 'TipoA',
        'numerointerior', 'numeroexterior', 'SSMA_TimeStamp', 'localidad', 'saldoSBO', 'tcf',
        'Exportado', 'Vigencia', 'TipoWeb', 'Activo', 'PagoForma', 'PagoFormaDesc', 'PagoCuenta',
        'PrePago', 'PrePagoDias', 'password', 'UsoCFDI', 'PagoMetodo', 'moneda', 'ValMoneda',
        'ValCredito', 'pagoBanco', 'ApSrv1', 'ApSrv2', 'CodAct', 'CodActReg', 'TLIRegApl',
        'TLIRegArt', 'TLIVisitaSuc', 'TLIVisitaFch', 'Ocupado', 'OcupadoSuc', 'Regimen', 'Sucursal'
    ];
    protected $casts = [
        'DIAS' => 'float', 'CREDITO' => 'float', 'DESC1' => 'float', 'DESC2' => 'float',
        'DESC3' => 'float', 'DESC4' => 'float', 'DESC5' => 'float', 'SALDO' => 'float',
        'PRECIO' => 'float', 'PROSPECT' => 'integer', 'CORTE' => 'int', 'PrePago' => 'integer',
        'PrePagoDias' => 'int', 'bloqueado' => 'integer', 'comision' => 'float', 'puntos' => 'int',
        'Exportado' => 'integer', 'Activo' => 'string', 'ValMoneda' => 'int', 'ValCredito' => 'int',
        'Regimen' => 'string', 'SSMA_TimeStamp' => 'timestamp', 'Vigencia' => 'datetime', 'TLIRegApl' => 'int',
        'Ocupado' => 'int'
    ];
    protected static function booted()
    {
        static::created(function ($client) {
            Log::info('Nuevo cliente creado', ['cliente_id' => $client->CLIENTE]);
        });
        static::updated(function ($client) {
            Log::info('Cliente actualizado', ['cliente_id' => $client->CLIENTE]);
        });
        static::deleted(function ($client) {
            Log::info('Cliente eliminado', ['cliente_id' => $client->CLIENTE]);
        });
    }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class VentaWeb extends Model
{
    protected $table = 'ventas_web';
    protected $primaryKey = 'VENTA';
    public $timestamps = false; // Si no tienes campos de fecha de creación y actualización
    protected $fillable = [
        'OCUPADO', 'TIPO_DOC', 'serieDocumento', 'NO_REFEREN', 'F_EMISION', 'F_VENC', 'CLIENTE',
        'VEND', 'IMPORTE', 'DESCUENTO', 'IMPUESTO', 'PRECIO', 'COSTO', 'ALMACEN', 'ESTADO', 'OBSERV',
        'TIPO_CAM', 'MONEDA', 'DESC1', 'DESC2', 'DESC3', 'DESC4', 'DESC5', 'DATOS', 'ENFAC', 'VENTAREF',
        'CIERRE', 'cierretienda', 'DESGLOSE', 'COBRANZA', 'USUARIO', 'USUFECHA', 'USUHORA', 'AUTO',
        'Relacion', 'PEDCLI', 'PEMB', 'DATEMB', 'AplicarDes', 'TipoVenta', 'Exportado', 'SUCURSAL',
        'VentaSuc', 'Pago1', 'Pago2', 'Concepto1', 'Concepto2', 'Pago3', 'Concepto3', 'Comision',
        'VentaOrigen', 'Diario', 'Caja', 'OrigenDev', 'Corte', 'Impreso', 'BANCO', 'NumeroCheque',
        'estacion', 'interes', 'redondeo', 'Ticket', 'importar', 'sucremota', 'ventaremota', 'comodin',
        'iespecial', 'nodesglosedetalle', 'Transporte', 'Repartidor', 'horasalida', 'horaregreso',
        'comisiontel', 'verificado', 'donativo', 'pagado', 'comisionvendedor', 'comodin1', 'comodin2',
        'comodin3', 'comodin4', 'pago4', 'concepto4', 'pregunta1', 'pregunta2', 'pregunta3', 'pregunta4',
        'pregunta5', 'fechacierre', 'businessintelligence', 'pedido', 'cambioDeEstado', 'placas', 'kilometraje',
        'color', 'serie', 'motor', 'tipo', 'marca', 'modelo', 'horaentrega', 'propina', 'paraconcentrador',
        'felectronica', 'coriginal', 'sdigital', 'ncortez', 'archivofe', 'facturado', 'SSMA_TimeStamp',
        'ticketsno', 'ventatipo', 'motdev', 'facorg', 'tipodocorg', 'foliodocorg', 'pedidoSBO', 'dAuto',
        'HoraEnt', 'HoraRecep', 'retraso', 'aefolio', 'reproceso', 'ususrv', 'proxser', 'UUID',
        'ComprobanteXML', 'PagoForma', 'PagoFormaDesc', 'PagoCuenta', 'ActWeb', 'OcupadoSuc', 'Sinc20',
        'SucSinc', 'LogCFDI'
    ];
    protected static function booted()
    {
        static::created(function ($ventaWeb) {
            Log::info('Nueva venta creada', ['venta_id' => $ventaWeb->VENTA]);
        });
        static::updated(function ($ventaWeb) {
            Log::info('Venta actualizada', ['venta_id' => $ventaWeb->VENTA]);
        });
        static::deleted(function ($ventaWeb) {
            Log::info('Venta eliminada', ['venta_id' => $ventaWeb->VENTA]);
        });
    }
}

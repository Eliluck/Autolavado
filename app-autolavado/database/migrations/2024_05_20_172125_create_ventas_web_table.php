<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_web', function (Blueprint $table) {
            $table->bigIncrements('VENTA');
            $table->string('OCUPADO', 100)->nullable();
            $table->string('TIPO_DOC', 100)->nullable();
            $table->string('serieDocumento', 100)->nullable();
            $table->string('NO_REFEREN', 100)->nullable();
            $table->date('F_EMISION')->nullable();
            $table->date('F_VENC')->nullable();
            $table->string('CLIENTE', 100)->nullable();
            $table->string('VEND', 100)->nullable();
            $table->decimal('IMPORTE', 10, 2)->nullable();
            $table->decimal('DESCUENTO', 10, 2)->nullable();
            $table->decimal('IMPUESTO', 10, 2)->nullable();
            $table->decimal('PRECIO', 10, 2)->nullable();
            $table->decimal('COSTO', 10, 2)->nullable();
            $table->string('ALMACEN', 100)->nullable();
            $table->string('ESTADO', 100)->nullable();
            $table->text('OBSERV')->nullable();
            $table->decimal('TIPO_CAM', 10, 4)->nullable();
            $table->string('MONEDA', 100)->nullable();
            $table->decimal('DESC1', 10, 2)->nullable();
            $table->decimal('DESC2', 10, 2)->nullable();
            $table->decimal('DESC3', 10, 2)->nullable();
            $table->decimal('DESC4', 10, 2)->nullable();
            $table->decimal('DESC5', 10, 2)->nullable();
            $table->text('DATOS')->nullable();
            $table->boolean('ENFAC')->default(false);
            $table->boolean('VENTAREF')->default(false);
            $table->boolean('CIERRE')->default(false);
            $table->boolean('cierretienda')->default(false);
            $table->text('DESGLOSE')->nullable();
            $table->boolean('COBRANZA')->default(false);
            $table->string('USUARIO', 100)->nullable();
            $table->dateTime('USUFECHA')->nullable();
            $table->time('USUHORA')->nullable();
            $table->boolean('AUTO')->default(false);
            $table->string('Relacion', 100)->nullable();
            $table->string('PEDCLI', 100)->nullable();
            $table->boolean('PEMB')->default(false);
            $table->date('DATEMB')->nullable();
            $table->boolean('AplicarDes')->default(false);
            $table->string('TipoVenta', 100)->nullable();
            $table->boolean('Exportado')->default(false);
            $table->string('SUCURSAL', 100)->nullable();
            $table->string('VentaSuc', 100)->nullable();
            $table->decimal('Pago1', 10, 2)->nullable();
            $table->decimal('Pago2', 10, 2)->nullable();
            $table->string('Concepto1', 100)->nullable();
            $table->string('Concepto2', 100)->nullable();
            $table->decimal('Pago3', 10, 2)->nullable();
            $table->string('Concepto3', 100)->nullable();
            $table->decimal('Comision', 10, 2)->nullable();
            $table->string('VentaOrigen', 100)->nullable();
            $table->string('Diario', 100)->nullable();
            $table->string('Caja', 100)->nullable();
            $table->string('OrigenDev', 100)->nullable();
            $table->string('Corte', 100)->nullable();
            $table->boolean('Impreso')->default(false);
            $table->string('BANCO', 100)->nullable();
            $table->string('NumeroCheque', 100)->nullable();
            $table->string('estacion', 100)->nullable();
            $table->decimal('interes', 10, 2)->nullable();
            $table->decimal('redondeo', 10, 2)->nullable();
            $table->string('Ticket', 100)->nullable();
            $table->boolean('importar')->default(false);
            $table->string('sucremota', 100)->nullable();
            $table->string('ventaremota', 100)->nullable();
            $table->string('comodin', 100)->nullable();
            $table->boolean('iespecial')->default(false);
            $table->boolean('nodesglosedetalle')->default(false);
            $table->string('Transporte', 100)->nullable();
            $table->string('Repartidor', 100)->nullable();
            $table->time('horasalida')->nullable();
            $table->time('horaregreso')->nullable();
            $table->decimal('comisiontel', 10, 2)->nullable();
            $table->boolean('verificado')->default(false);
            $table->boolean('donativo')->default(false);
            $table->boolean('pagado')->default(false);
            $table->decimal('comisionvendedor', 10, 2)->nullable();
            $table->string('comodin1', 100)->nullable();
            $table->string('comodin2', 100)->nullable();
            $table->string('comodin3', 100)->nullable();
            $table->string('comodin4', 100)->nullable();
            $table->decimal('pago4', 10, 2)->nullable();
            $table->string('concepto4', 100)->nullable();
            $table->string('pregunta1', 100)->nullable();
            $table->string('pregunta2', 100)->nullable();
            $table->string('pregunta3', 100)->nullable();
            $table->string('pregunta4', 100)->nullable();
            $table->string('pregunta5', 100)->nullable();
            $table->date('fechacierre')->nullable();
            $table->text('businessintelligence')->nullable();
            $table->string('pedido', 100)->nullable();
            $table->string('cambioDeEstado', 100)->nullable();
            $table->string('placas', 100)->nullable();
            $table->string('kilometraje', 100)->nullable();
            $table->string('color', 100)->nullable();
            $table->string('serie', 100)->nullable();
            $table->string('motor', 100)->nullable();
            $table->string('tipo', 100)->nullable();
            $table->string('marca', 100)->nullable();
            $table->string('modelo', 100)->nullable();
            $table->time('horaentrega')->nullable();
            $table->decimal('propina', 10, 2)->nullable();
            $table->boolean('paraconcentrador')->default(false);
            $table->string('felectronica', 100)->nullable();
            $table->boolean('coriginal')->default(false);
            $table->boolean('sdigital')->default(false);
            $table->string('ncortez', 100)->nullable();
            $table->text('archivofe')->nullable();
            $table->boolean('facturado')->default(false);
            $table->timestamp('SSMA_TimeStamp')->nullable();
            $table->string('ticketsno', 100)->nullable();
            $table->string('ventatipo', 100)->nullable();
            $table->string('motdev', 100)->nullable();
            $table->string('facorg', 100)->nullable();
            $table->string('tipodocorg', 100)->nullable();
            $table->string('foliodocorg', 100)->nullable();
            $table->string('pedidoSBO', 100)->nullable();
            $table->boolean('dAuto')->default(false);
            $table->time('HoraEnt')->nullable();
            $table->time('HoraRecep')->nullable();
            $table->boolean('retraso')->default(false);
            $table->string('aefolio', 100)->nullable();
            $table->boolean('reproceso')->default(false);
            $table->string('ususrv', 100)->nullable();
            $table->date('proxser')->nullable();
            $table->string('UUID', 100)->nullable();
            $table->text('ComprobanteXML')->nullable();
            $table->string('PagoForma', 100)->nullable();
            $table->string('PagoFormaDesc', 100)->nullable();
            $table->string('PagoCuenta', 100)->nullable();
            $table->boolean('ActWeb')->default(false);
            $table->boolean('OcupadoSuc')->default(false);
            $table->boolean('Sinc20')->default(false);
            $table->string('SucSinc', 100)->nullable();
            $table->text('LogCFDI')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas_web');
    }
}

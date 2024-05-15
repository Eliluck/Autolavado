<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('CLIENTE');
            $table->string('NOMBRE')->default('Empresa XYZ');
            $table->string('CALLE')->default('Avenida Siempre Viva');
            $table->string('NUMERO')->default('742');
            $table->string('COLONIA')->default('BARRIO SAN ANTONIO CULHUACÁN');
            $table->string('POBLA')->default('PONCITLÁN');
            $table->string('CIUDAD')->default('PONCITLÁN');
            $table->string('ESTADO')->default('AGUASCALIENTES');
            $table->string('PAIS')->default('MEXICO');
            $table->string('TELEFONO')->default('555-1234');
            $table->float('DIAS')->default(30);
            $table->float('CREDITO')->default(5000);
            $table->float('DESC1')->default(5);
            $table->float('DESC2')->default(10);
            $table->float('DESC3')->default(15);
            $table->float('DESC4')->default(20);
            $table->float('DESC5')->default(25);
            $table->string('RFC')->unique()->default('XYZ123456789');
            $table->string('TIPO')->default('Cliente');
            $table->string('CONTACTO')->default('John Doe');
            $table->string('COBRADOR')->default('Jane Doe');
            $table->string('VEND')->default('Juan Perez');
            $table->float('PRECIO')->default(100);
            $table->string('CP')->default('01201');
            $table->smallInteger('PROSPECT')->default(0);
            $table->string('REVISION')->default('Mensual');
            $table->text('OBSERV')->default('Cliente importante');
            $table->string('ZONA')->default('Norte');
            $table->string('CORREO')->default('contacto@empresaxyz.com');
            $table->string('URL')->default('www.empresaxyz.com');
            $table->float('SALDO')->default(0);
            $table->string('USUARIO')->default('admin');
            $table->time('USUHORA')->default('13:42:48');
            $table->date('USUFECHA')->default('2024-05-05');
            $table->string('PROVEEDOR')->default('Proveedor Principal');
            $table->string('CURB')->default('N/A');
            $table->integer('CORTE')->default(30);
            $table->string('COBRO')->default('Cheque');
            $table->string('CONCEPTO')->default('Venta');
            $table->float('INGRESO')->default(0);
            $table->smallInteger('bloqueado')->default(0);
            $table->string('claveweb')->default('clave123');
            $table->string('emailcobranza')->default('cobranza@empresaxyz.com');
            $table->string('embarcar')->default('Sí');
            $table->float('comision')->default(5);
            $table->string('foto')->default('default.jpg');
            $table->integer('puntos')->default(100);
            $table->string('recomendado')->default('Cliente Recomendado');
            $table->boolean('nuevo')->default(false);
            $table->date('F_nac')->default('1980-01-01');
            $table->string('sexo')->default('Masculino');
            $table->string('email')->default('info@empresaxyz.com');
            $table->string('TipoA')->default('Tipo A');
            $table->string('numerointerior')->default('1');
            $table->string('numeroexterior')->default('2');
            $table->timestamp('SSMA_TimeStamp')->nullable();
            $table->string('localidad')->default('Localidad X');
            $table->float('saldoSBO')->default(0);
            $table->string('tcf')->default('TCF Example');
            $table->smallInteger('Exportado')->default(1);
            $table->datetime('Vigencia')->default('2024-05-05 13:42:48');
            $table->string('TipoWeb')->default('Tipo Web');
            $table->string('Activo')->default('Activo');
            $table->string('PagoForma')->default('Transferencia');
            $table->string('PagoFormaDesc')->default('Transferencia Bancaria');
            $table->string('PagoCuenta')->default('1234567890');
            $table->smallInteger('PrePago')->default(0);
            $table->integer('PrePagoDias')->default(0);
            $table->string('password')->default('$2y$12$6Xzi3c1Ejs/vt4HZqtlkF.UayF77HMPk6klH2NV3UnW...');
            $table->string('UsoCFDI')->default('G01');
            $table->string('PagoMetodo')->default('PUE');
            $table->string('moneda')->default('MXN');
            $table->smallInteger('ValMoneda')->default(1);
            $table->smallInteger('ValCredito')->default(1);
            $table->string('pagoBanco')->default('Banco XYZ');
            $table->string('ApSrv1')->default('Servicio 1');
            $table->string('ApSrv2')->default('Servicio 2');
            $table->string('CodAct')->default('Codigo Actividad');
            $table->string('CodActReg')->default('Codigo Registro');
            $table->smallInteger('TLIRegApl')->default(1);
            $table->smallInteger('TLIRegArt')->default(1);
            $table->string('TLIVisitaSuc')->default('Sucursal Principal');
            $table->datetime('TLIVisitaFch')->default('2024-05-05 13:42:48');
            $table->smallInteger('Ocupado')->default(0);
            $table->string('OcupadoSuc')->default('Sucursal Principal');
            $table->string('Regimen')->default('Regimen Fiscal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}

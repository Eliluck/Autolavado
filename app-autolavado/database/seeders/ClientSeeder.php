<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            'NOMBRE' => 'Empresa XYZ',
            'CALLE' => 'Avenida Siempre Viva',
            'NUMERO' => '742',
            'COLONIA' => 'BARRIO SAN ANTONIO CULHUACÁN',
            'POBLA' => 'PONCITLÁN',
            'CIUDAD' => 'PONCITLÁN',
            'ESTADO' => 'AGUASCALIENTES',
            'PAIS' => 'MEXICO',
            'TELEFONO' => '555-1234',
            'DIAS' => 30,
            'CREDITO' => 5000,
            'DESC1' => 5,
            'DESC2' => 10,
            'DESC3' => 15,
            'DESC4' => 20,
            'DESC5' => 25,
            'RFC' => 'XYZ123456789',
            'TIPO' => 'Cliente',
            'CONTACTO' => 'John Doe',
            'COBRADOR' => 'Jane Doe',
            'VEND' => 'Juan Perez',
            'PRECIO' => 100,
            'CP' => '01201',
            'PROSPECT' => 0,
            'REVISION' => 'Mensual',
            'OBSERV' => 'Cliente importante',
            'ZONA' => 'Norte',
            'CORREO' => 'contacto@empresaxyz.com',
            'URL' => 'www.empresaxyz.com',
            'SALDO' => 0,
            'USUARIO' => 'admin',
            'USUHORA' => '13:42:48',
            'USUFECHA' => Carbon::now()->format('Y-m-d'),
            'PROVEEDOR' => 'Proveedor Principal',
            'CURB' => 'N/A',
            'CORTE' => 30,
            'COBRO' => 'Cheque',
            'CONCEPTO' => 'Venta',
            'INGRESO' => 0,
            'bloqueado' => 0,
            'claveweb' => 'clave123',
            'emailcobranza' => 'cobranza@empresaxyz.com',
            'embarcar' => 'Sí',
            'comision' => 5,
            'foto' => 'default.jpg',
            'puntos' => 100,
            'recomendado' => 'Cliente Recomendado',
            'nuevo' => false,
            'F_nac' => '1980-01-01',
            'sexo' => 'Masculino',
            'email' => 'info@empresaxyz.com',
            'TipoA' => 'Tipo A',
            'numerointerior' => '1',
            'numeroexterior' => '2',
            'SSMA_TimeStamp' => Carbon::now(),
            'localidad' => 'Localidad X',
            'saldoSBO' => 0,
            'tcf' => 'TCF Example',
            'Exportado' => 1,
            'Vigencia' => Carbon::now(),
            'TipoWeb' => 'Tipo Web',
            'Activo' => 'Activo',
            'PagoForma' => 'Transferencia',
            'PagoFormaDesc' => 'Transferencia Bancaria',
            'PagoCuenta' => '1234567890',
            'PrePago' => 0,
            'PrePagoDias' => 0,
            'password' => bcrypt('secret'),
            'UsoCFDI' => 'G01',
            'PagoMetodo' => 'PUE',
            'moneda' => 'MXN',
            'ValMoneda' => 1,
            'ValCredito' => 5000,
            'pagoBanco' => 'Banco XYZ',
            'ApSrv1' => '',
            'ApSrv2' => '',
            'CodAct' => '',
            'CodActReg' => '',
            'TLIRegApl' => 0,
            'TLIRegArt' => 0,
            'TLIVisitaSuc' => 1,
            'TLIVisitaFch' => 1,
            'Ocupado' => 0,
            'OcupadoSuc' => 0,
            'Regimen' => '601',
            'sucursal' => 'Principal'
        ]);
    }
}

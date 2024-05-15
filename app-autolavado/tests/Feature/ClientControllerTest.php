<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClientControllerTest extends TestCase
{
    /**
     * Prueba para verificar que un cliente existente se puede encontrar y se devuelve la información correcta.
     */
    public function test_client_found()
    {
        $response = $this->getJson("/client/XYZ123456789");

        $response->assertStatus(200)
                 ->assertJson([
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
                     'USUFECHA' => '2024-05-14',
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
                     'tipoA' => 'Tipo A',
                     'numerointerior' => '1',
                     'numeroexterior' => '2',
                     'SSMA_TimeStamp' => '2024-05-14 17:55:11',
                     'localidad' => 'Localidad X',
                     'saldoSBO' => 0,
                     'tcf' => 'TCF Example',
                     'Exportado' => 1,
                     'Vigencia' => '2024-05-14 17:55:11',
                     'TipoWeb' => 'Tipo Web',
                     'Activo' => 'Activo',
                     'PagoForma' => 'Transferencia',
                     'PagoFormaDesc' => 'Transferencia Bancaria',
                     'PagoCuenta' => '1234567890',
                     'PrePago' => 0,
                     'PrePagoDias' => 0,
                     'password' => '$2y$12$rbnFi2ZxWjNVuTDgOqnG1ulDA9R/O2ruHcMfMRqgEjg...',
                     'usoCFDI' => 'G01',
                     'PagoMetodo' => 'PUE',
                     'moneda' => 'MXN',
                     'ValMoneda' => 1,
                     'ValCredito' => 5000,
                     'pagoBanco' => 'Banco XYZ',
                     'Apsrv1' => 'Servicio 1',
                     'Apsrv2' => 'Servicio 2',
                     'CodAct' => 1,
                     'CodActReg' => 1,
                     'TliRegApl' => 0,
                     'TliRegArt' => 0,
                     'TliVisitaSuc' => 0,
                     'TliVisitaFch' => '2024-05-14 17:55:11',
                     'Ocupado' => 0,
                     'OcupadoSuc' => 'Principal',
                     'Regimen' => '601',
                     'sucursal' => 'Principal'
                 ]);
    }
}

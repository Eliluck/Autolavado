<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\SatUsoCFDI;

class SatUsoCFDITest extends TestCase
{

    public function testRegistrarUsoCFDISuccessfully()
    {
        // Datos de entrada para el registro
        $data = [
            'Codigo' => 'G04',
            'Descrip' => 'Compra de mercancías',
            'Usuario' => 'usuario_test'
        ];

        // Llamar al método registrarUsoCFDI
        $result = SatUsoCFDI::registrarUsoCFDI($data);

        // Verificar que el resultado no es nulo
        $this->assertNotNull($result, 'El método debería retornar un objeto no nulo.');

        // Verificar que los datos del objeto retornado son correctos
        $this->assertEquals($data['Codigo'], $result->Codigo, 'El código de respuesta no coincide: '.$result->Codigo.'.');
        $this->assertEquals($data['Descrip'], $result->Descrip);
        $this->assertEquals($data['Usuario'], $result->Usuario);

        // Verificar que el registro existe en la base de datos
    }

    public function testRegistrarUsoCFDIFailure()
    {
        // Introducir un código que violaría las reglas del negocio o causaría una excepción
        $data = [
            'Codigo' => null, // Supongamos que el código no puede ser nulo
            'Descrip' => 'Compra de servicios',
            'Usuario' => 'usuario_test'
        ];

        // Llamar al método registrarUsoCFDI y esperar nulo como resultado debido a la excepción
        $result = SatUsoCFDI::registrarUsoCFDI($data);

        // Verificar que el resultado es nulo debido a un error
        $this->assertNull($result, 'El método debería retornar nulo debido a un error de validación.');

        // Verificar que el registro no existe en la base de datos
    }
}

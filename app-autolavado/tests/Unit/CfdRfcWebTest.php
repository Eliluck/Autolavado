<?php

namespace Tests\Unit\Models;

use App\Models\CfdRfcWeb;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class CfdRfcWebTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de prueba o cualquier configuración necesaria
    }

    public function testLogIsWrittenWhenCfdRfcWebIsCreated()
    {
        Log::spy();

        // Crear un nuevo registro
        $cfdRfcWeb = CfdRfcWeb::create([
            'RFC' => 'XEXX010101000',
            'regimenfiscal' => '601',
            'Nombre' => 'Empresa Ejemplo S.A. de C.V.',
            'Calle' => 'Ejemplo',
            'NumeroExterior' => '123',
            'NumeroInterior' => '1',
            'Colonia' => 'Industrial',
            'CP' => '15000',
            'Localidad' => '64640',
            'Municipio' => 'Ejemplo',
            'Estado' => 'Ejemplo',
            'Pais' => 'MEX',
            'Certificado' => 'Certificado Ejemplo',
            'llave' => 'Llave Ejemplo',
            'Clave' => 'Clave',
            'Formato' => 'Formato'
        ]);

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('info')->once()->with('Nuevo registro CFD_RFC_Web creado', ['id' => $cfdRfcWeb->id]);
    }

    public function testLogIsWrittenWhenCfdRfcWebIsUpdated()
    {
        $cfdRfcWeb = CfdRfcWeb::create([
            'RFC' => 'XEXX010102000',
            'regimenfiscal' => '602',
            'Nombre' => 'Otra Empresa S.A. de C.V.',
            'Calle' => 'Otra Calle',
            'NumeroExterior' => '456',
            'NumeroInterior' => '2',
            'Colonia' => 'Comercial',
            'CP' => '15010',
            'Localidad' => '64640',
            'Municipio' => 'Otro',
            'Estado' => 'Otro Estado',
            'Pais' => 'USA',
            'Certificado' => 'Otro Certificado',
            'llave' => 'Otra Llave',
            'Clave' => 'Otra Clave',
            'Formato' => 'Otro Formato'
        ]);

        Log::spy();

        // Actualizar el registro
        $cfdRfcWeb->update(['Nombre' => 'Empresa Modificada S.A. de C.V.']);

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('info')->once()->with('Registro CFD_RFC_Web actualizado', ['id' => $cfdRfcWeb->id]);
    }

    public function testLogIsWrittenWhenCfdRfcWebIsDeleted()
    {
        $cfdRfcWeb = CfdRfcWeb::create([
            'RFC' => 'XEXX010103000',
            'regimenfiscal' => '603',
            'Nombre' => 'Última Empresa S.A. de C.V.',
            'Calle' => 'Última Calle',
            // resto de los atributos
        ]);

        Log::spy();

        // Eliminar el registro
        $cfdRfcWeb->delete();

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('warning')->once()->with('Registro CFD_RFC_Web siendo eliminado', ['id' => $cfdRfcWeb->id]);
    }

    protected function tearDown(): void
    {
        // Limpiar la base de datos o restablecer cualquier configuración
        parent::tearDown();
    }
}

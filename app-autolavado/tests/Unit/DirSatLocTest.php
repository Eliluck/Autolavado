<?php

namespace Tests\Unit\Models;

use App\Models\DirSatLoc;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirSatLocTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de la base de datos o cualquier configuración necesaria
    }

    public function testGetByLocationCodeReturnsLocationWhenFound()
    {
        // Preparar los datos de prueba
        $locationCode = '001';
        DirSatLoc::create([
            'EdoCod' => '010',
            'LocCod' => $locationCode,
            'LocNom' => 'Test Location'
        ]);

        Log::spy();

        // Ejecutar el método a probar
        $result = DirSatLoc::getByLocationCode($locationCode);

        // Afirmar que el resultado es como se esperaba
        $this->assertNotNull($result);
        $this->assertEquals($locationCode, $result->LocCod);
        $this->assertEquals('Test Location', $result->LocNom);

        // Verificar que se registra la información en el log
        Log::shouldHaveReceived('info')->once()->with("Retrieved location by location code: LocCod=$locationCode");
    }

    public function testGetByLocationCodeReturnsNullWhenNotFound()
    {
        $locationCode = '999'; // Código que no existe
        Log::spy();

        // Ejecutar el método a probar
        $result = DirSatLoc::getByLocationCode($locationCode);

        // Afirmar que el resultado es nulo
        $this->assertNull($result);

        // Verificar que se registra la información en el log
        Log::shouldHaveReceived('info')->once()->with("Retrieved location by location code: LocCod=$locationCode");
    }

    public function tearDown(): void
    {
        // Limpiar la base de datos o restablecer cualquier configuración
        parent::tearDown();
    }
}

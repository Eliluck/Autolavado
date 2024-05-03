<?php

namespace Tests\Unit\Models;

use App\Models\DirSatCP;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirSatCPTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de la base de datos o cualquier configuración necesaria
    }

    public function testGetByLocationCode()
    {
        // Preparar los datos de prueba
        $locationCode = '001';
        $expectedData = [
            'PaisCod' => 'MX',
            'EdoCod' => '09',
            'MunCod' => '015',
            'LocCod' => $locationCode
        ];

        // Insertar datos en la base de datos simulada
        DirSatCP::create($expectedData);

        Log::spy();

        // Ejecutar el método a probar
        $result = DirSatCP::getByLocationCode($locationCode);

        // Afirmar que el resultado es como se esperaba
        $this->assertNotNull($result);
        $this->assertEquals($expectedData['PaisCod'], $result->PaisCod);
        $this->assertEquals($expectedData['EdoCod'], $result->EdoCod);
        $this->assertEquals($expectedData['MunCod'], $result->MunCod);
        $this->assertEquals($expectedData['LocCod'], $result->LocCod);

        // Verificar que se registra la información en el log
        Log::shouldHaveReceived('info')->once()->with("Retrieved postal code for location code: $locationCode");

        // Limpiar después de la prueba si es necesario
    }

    public function tearDown(): void
    {
        // Limpiar la base de datos o restablecer cualquier configuración
        parent::tearDown();
    }
}

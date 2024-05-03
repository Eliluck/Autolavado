<?php

namespace Tests\Unit\Models;

use App\Models\DirSatCol;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class DirSatColTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de la base de datos o cualquier configuración necesaria
    }

    public function testGetByPostalCode()
    {
        // Preparar los datos de prueba
        $postalCode = '12345';
        $expectedColonyData = [
            ['ColCod' => '001', 'ColNom' => 'Colony1', 'CP' => '12345'],
            ['ColCod' => '002', 'ColNom' => 'Colony2', 'CP' => '12345']
        ];

        // Insertar datos en la base de datos simulada
        foreach ($expectedColonyData as $data) {
            DirSatCol::create($data);
        }

        Log::spy();

        // Ejecutar el método a probar
        $results = DirSatCol::getByPostalCode($postalCode);

        // Afirmar que los resultados son como se esperaban
        $this->assertInstanceOf(Collection::class, $results);
        foreach ($results as $index => $result) {
            $this->assertEquals($expectedColonyData[$index]['ColCod'], $result->ColCod);
            $this->assertEquals($expectedColonyData[$index]['ColNom'], $result->ColNom);
        }

        // Verificar que se registra la información en el log
        Log::shouldHaveReceived('info')->once()->with("Retrieved colonies for postal code: $postalCode");

        // Limpiar después de la prueba si es necesario
    }

    public function tearDown(): void
    {
        // Limpiar la base de datos o restablecer cualquier configuración
        parent::tearDown();
    }
}

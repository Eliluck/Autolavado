<?php

namespace Tests\Unit\Models;

use App\Models\DirSatMun;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;


class DirSatMunTest extends TestCase
{


    public function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de la base de datos o cualquier configuración necesaria
    }

    public function testLogIsWrittenWhenMunicipalityIsRetrieved()
    {
        // Preparar los datos de prueba
        $expectedData = [
            'EdoCod' => '010',
            'MunCod' => '001',
            'MunNom' => 'Test Municipality'
        ];

        // Insertar datos en la base de datos simulada
        $municipality = DirSatMun::create($expectedData);

        Log::spy();

        // Recuperar el objeto para disparar el evento 'retrieved'
        $retrievedMunicipality = DirSatMun::find($municipality->MunCod);

        // Afirmar que el objeto es recuperado correctamente
        $this->assertNotNull($retrievedMunicipality);
        $this->assertEquals($expectedData['MunCod'], $retrievedMunicipality->MunCod);

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('info')->once()->with("Retrieved municipality: EdoCod=$retrievedMunicipality->EdoCod, MunCod=$retrievedMunicipality->MunCod");

        // No hay necesidad de limpiar después de esta prueba
    }

    public function tearDown(): void
    {
        // Limpiar la base de datos o restablecer cualquier configuración
        parent::tearDown();
    }
}

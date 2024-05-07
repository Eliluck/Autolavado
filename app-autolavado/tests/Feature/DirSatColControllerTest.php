<?php

// tests/Feature/DirSatColControllerTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\DirSatCol;

class DirSatColControllerTest extends TestCase
{

    public function testCanRetrieveColoniesByCP()
    {
        // Crear datos de prueba usando la factory
        $cp = '10000'; // Definir un código postal de prueba
        $expectedColonies = DirSatCol::factory()->count(3)->create([
            'CP' => $cp
        ]);

        // Hacer una petición GET al endpoint y verificar la respuesta
        $response = $this->getJson("/colonies/{$cp}");

        // Asegurarse de que la respuesta tenga un estado HTTP 200
        $response->assertStatus(200);

        // Asegurarse de que la respuesta contenga los datos correctos
        $response->assertJson($expectedColonies->toArray());

        // Opcionalmente, verificar el número de colonias devueltas
        $response->assertJsonCount(3);
    }
}

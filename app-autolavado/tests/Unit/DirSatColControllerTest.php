<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\DirSatCol;

class DirSatColControllerTest extends TestCase
{

    /**
     * Test for retrieving colonies based on CP.
     *
     * @return void
     */
    public function test_get_colonies_by_cp()
    {
        // Agrega datos a la base de datos
        DirSatCol::factory()->create(['CP' => '12345', 'colony' => 'Colony A']);
        DirSatCol::factory()->create(['CP' => '12345', 'colony' => 'Colony B']);

        // Hacer la solicitud al endpoint correspondiente
        $response = $this->get('/api/colonies/12345'); // Ajusta la URL según tu ruta real

        // Verifica que la solicitud haya sido exitosa
        $response->assertStatus(200);

        // Verifica la estructura de la respuesta JSON
        $response->assertJsonStructure([
            '*' => ['id', 'CP', 'colony']
        ]);

        // Verifica el contenido de la respuesta JSON
        $response->assertJson([
            ['CP' => '12345', 'colony' => 'Colony A'],
            ['CP' => '12345', 'colony' => 'Colony B']
        ]);
    }
}

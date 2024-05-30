<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use App\Models\DirSatLoc;

class DirSatLocControllerTest extends TestCase
{

    /**
     * Test getByLocCod method.
     *
     * @return void
     */
    public function test_get_by_loc_cod_returns_locality()
    {

        // Realizar una solicitud GET al endpoint con el código de localidad
        $response = $this->getJson('/locality/19');

        // Verificar que la respuesta tenga el estado 200 y contenga los datos esperados
        $response
            ->assertStatus(200)
            ->assertJson([
                'LocCod' => '19',
            ]);

        // Verificar que la entrada ha sido registrada en el log
    }

    /**
     * Test getByLocCod method with non-existing LocCod.
     *
     * @return void
     */
    public function test_get_by_loc_cod_returns_null_for_non_existing_loc_cod()
    {
        // Realizar una solicitud GET al endpoint con un código de localidad que no existe
        $response = $this->getJson('/locality/19');

        // Verificar que la respuesta tenga el estado 200 y sea nula
        $response
            ->assertStatus(200)
            ->assertJson(null);

        // Verificar que la entrada ha sido registrada en el log
        Log::shouldReceive('info')
            ->once()
            ->with('Consulta de localidad por código postal: LocCod=99999');
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\DirSatMun;
use Illuminate\Support\Facades\Log;

class DirSatMunControllerTest extends TestCase
{

    /**
     * Test getByMunicipioCode method.
     *
     * @return void
     */
    public function test_get_by_municipio_code_returns_municipalities()
    {

        // Realizar una solicitud GET al endpoint con el código de municipio
        $response = $this->getJson('/municipalities/160');

        // Verificar que la respuesta tenga el estado 200 y contenga los datos esperados
        $response
            ->assertStatus(200)
            ->assertJson([
                'EdoCod' => 'VER',
                'MunNom' => 'ÁLAMO TEMAPACHE'
            ]);
    }

    /**
     * Test getByMunicipioCode method with non-existing code.
     *
     * @return void
     */
    public function test_get_by_municipio_code_returns_empty_for_non_existing_code()
    {
        $nonExistingCode = '99999';

        // Establecer expectativas en el log
        Log::shouldReceive('info')
            ->once()
            ->with("Retrieved municipalities by code: MunicipioCod=$nonExistingCode");

        // Realizar una solicitud GET al endpoint con un código de municipio que no existe
        $response = $this->getJson('/api/dir-sat-mun/' . $nonExistingCode);

        // Verificar que la respuesta tenga el estado 200 y esté vacía
        $response
            ->assertStatus(200)
            ->assertJson([]);
    }
}

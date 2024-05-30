<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirSatCPControllerTest extends TestCase
{
    /**
     * Prueba exitosa de la recuperación de registros de códigos postales filtrados por código de país.
     */
    public function test_get_postal_codes_by_country_code()
    {
        Log::info('Iniciando prueba para la recuperación de registros de códigos postales por código de país.');

        // Reali  zar la solicitud HTTP al endpoint
        $countryCode = '25900'; // Asegúrate de que este código de país exista en tu base de datos
        Log::info("Realizando petición HTTP para obtener códigos postales para el país: $countryCode");
        $response = $this->getJson("/postal-codes/$countryCode");

        // Verificar que la respuesta contenga los campos específicos esperados
        Log::info('Verificando el estado de la respuesta y la estructura JSON.');
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => ['EdoCod', 'PaisCod', 'MunCod', 'LocCod']  // Verifica que estos campos estén presentes en cada objeto del array JSON
                 ]);

        Log::info('Prueba completada exitosamente para la recuperación de códigos postales por código de país.');
    }
}

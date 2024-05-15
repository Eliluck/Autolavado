<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirSatColControllerTest extends TestCase
{
    /**
     * Prueba exitosa de la recuperación de campos específicos de colonias por código postal.
     */
    public function test_get_specific_fields_of_colonies_by_cp()
    {
        Log::info('Iniciando prueba para la recuperación de campos específicos de colonias por código postal.');

        // Realizar la solicitud HTTP al endpoint
        Log::info('Realizando petición HTTP para obtener colonias para el código postal: 09800');
        $response = $this->getJson('/colonies/09800');

        // Verificar que la respuesta contenga los campos específicos esperados
        Log::info('Verificando el estado de la respuesta y la estructura JSON.');
        $response->assertStatus(200)
                 ->assertJsonFragment([
                     'CP' => '09800',
                     'ColCod' => 1539, // Asegúrate de que estos valores coincidan con los datos esperados en la BD
                     'ColNom' => 'BARRIO SAN ANTONIO CULHUACÁN'
                 ])
                 ->assertJsonStructure([[
                     'CP', 'ColCod', 'ColNom'  // Verifica que estos campos estén presentes en la respuesta JSON
                 ]]);

        Log::info('Prueba completada exitosamente para la recuperación de campos específicos de colonias por código postal.');
    }

    /**
     * Prueba de intento de recuperación con un código postal que no tiene colonias asociadas.
     */
    public function test_no_colonies_found_for_cp()
    {
        Log::info('Iniciando prueba para la recuperación de colonias con un código postal que no debería tener entradas.');

        // Realizar la solicitud HTTP al endpoint con un CP que no tiene colonias
        Log::info('Realizando petición HTTP para obtener colonias para un código postal inexistente: 00000');
        $response = $this->getJson('/api/colonies/00000');

        // Verificar que la respuesta es un arreglo vacío
        Log::info('Verificando que la respuesta para un código postal inexistente devuelva un JSON vacío.');
        $response->assertStatus(200)
                 ->assertJson([]);  // Confirmar que el resultado es un array JSON vacío

        Log::info('Prueba completada exitosamente para un código postal inexistente.');
    }
}

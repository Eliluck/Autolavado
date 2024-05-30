<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Log; // Importar el Facade Log

class ClientControllerTest extends TestCase
{
    /**
     * Prueba para verificar que un cliente existente se puede encontrar y se devuelve la información correcta.
     */
    public function test_client_found()
    {
        Log::info('Inicio de la prueba: test_client_found');

        // Intentar obtener los datos del cliente
        $response = $this->getJson('/client/XYZ123456789', [
            'RFC' => 'XYZ123456789',
        ]);

        Log::info('Respuesta recibida', [
            'status' => $response->status(),
            'data' => $response->json()
        ]);

        // Verificaciones
        $response->assertStatus(200);

        Log::info('Verificación completa: El cliente existe');
    }
}

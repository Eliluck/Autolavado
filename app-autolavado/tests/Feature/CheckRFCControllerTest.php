<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class CheckRFCControllerTest extends TestCase
{


    /**
     * Test checking an existing RFC in the database.
     *
     * @return void
     */


    public function testCheckExistingRFC()
    {
    try {
        // Registrando el inicio de la prueba
        Log::info('Iniciando la prueba de verificación de RFC');

        $response = $this->postJson('/check-rfc', [
            'rfc' => 'XYZ123456789',
            'sucursal' => 'sucursal principal'
        ]);

        // Registrar los datos enviados
        Log::info('Datos enviados para la prueba', ['rfc' => 'XYZ123456789', 'sucursal' => 'Sucursal Principal']);

        // Realizar aserciones
        $response->assertStatus(200)
                 ->assertJson(['exists' => true]);

        // Registrar el resultado de la prueba
        Log::info('Prueba completada con éxito', ['status' => $response->status(), 'data' => $response->json()]);
    } catch (\Exception $e) {
        // Registrar el error en caso de excepción
        Log::error('Error durante la prueba de verificación de RFC', [
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);

        // Re-lanzar la excepción para que el framework de pruebas la maneje
        throw $e;
    }
}


    /**
     * Test checking a non-existing RFC.
     *
     * @return void
     */
    public function testCheckNonExistingRFC()
    {
        $response = $this->postJson('/check-rfc', [
            'rfc' => 'noexistente_RFC',
            'sucursal' => 'basededatos_sucursal'
        ]);

        $response->assertStatus(200)
                 ->assertJson(['exists' => false]);
    }
}

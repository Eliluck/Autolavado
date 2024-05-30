<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use App\Providers\RFCValidator;
use Mockery;

class RFCValidationControllerTest extends TestCase
{

    /**
     * Test RFC validation success.
     *
     * @return void
     */
    public function test_validate_rfc_success()
    {
    try {
        Log::info('Iniciando la prueba de verificación de RFC');

        $response = $this->postJson('/validador', [
            'RFC' => 'GODE561231HG9',
        ]);

        Log::info('Datos enviados para la prueba', ['RFC' => 'GODE561231HG9']);

        $response->assertStatus(200)
                 ->assertJson(['message' => 'RFC válido']);

        Log::info('Prueba completada con éxito', ['status' => $response->status(), 'data' => $response->json()]);
    } catch (\Exception $e) {
        Log::error('Error durante la prueba de verificación de RFC', [
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        throw $e;
    }
}


}

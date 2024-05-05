<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Client;

class CheckRFCControllerTest extends TestCase
{
    use WithoutMiddleware; // Si tienes middleware que podría bloquear la solicitud, usa este Trait para deshabilitarlo en las pruebas

    /**
     * Test checking an existing RFC in the database.
     *
     * @return void
     */
    public function testCheckExistingRFC()
    {

        $response = $this->postJson('/check-rfc', [
            'rfc' => 'XYZ123456789',
            'sucursal' => 'Sucursal Principal'
        ]);

        $response->assertStatus(200)
                 ->assertJson(['exists' => true]);
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

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CheckRFCControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test checking an existing RFC.
     *
     * @return void
     */
    public function testCheckExistingRFC()
    {
        $response = $this->postJson('/web/check-rfc', [
            'RFC' => 'XYZ123456789',  // Asegúrate de que este RFC realmente exista en tu base de datos.
            'sucursal' => 'Sucursal Principal'
        ]);

        $response->assertStatus(200);
        $response->assertJson(['exists' => true]);
    }

    /**
     * Test checking a non-existing RFC.
     *
     * @return void
     */
    public function testCheckNonExistingRFC()
    {
        $response = $this->postJson('/api/check-rfc', [
            'rfc' => 'RFC_NO_EXISTENTE',  // Utiliza un RFC que estés seguro de que no está en tu base de datos.
            'sucursal' => 'Secondary'
        ]);

        $response->assertStatus(200);
        $response->assertJson(['exists' => false]);
    }
}

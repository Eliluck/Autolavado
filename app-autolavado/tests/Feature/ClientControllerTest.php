<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Client;

class ClientControllerTest extends TestCase
{
    use WithoutMiddleware; // Esto desactiva el middleware si es necesario para la prueba

    public function testGetClientByRFCNotFound()
    {
        // Asegúrate de usar un RFC que sabes que no existe en la base de datos
        $response = $this->getJson('/api/clients/by-rfc/NONEXISTENTRFC');

        $response->assertStatus(404);
        $response->assertJson([
            'error' => 'Cliente no encontrado',
        ]);
        $response->assertJsonStructure([
            'error',
            'paises',
            'usos_cfdi',
            'regimen_fiscal',
            'pagos',
            'metodos'
        ]);
    }

    public function testGetClientByRFCFound()
    {
        // Asegúrate de usar un RFC que sabes que existe en la base de datos
        $client = Client::first();  // Obtiene el primer cliente disponible como ejemplo
        $response = $this->getJson('/api/clients/by-rfc/' . $client->RFC);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'nombre',
            'rfc',
            'pais',
            'cp',
            'pobla',
            'ciudad',
            'estado',
            'colonia',
            'calle',
            'numeroexterior',
            'numerointerior',
            'UsoCFDI',
            'regimenFiscal',
            'pagoForma',
            'PagoMetodo',
            'email',
            'paises',
            'usos_cfdi',
            'regimen_fiscal',
            'pagos',
            'metodos',
            'cps',
            'colonias'
        ]);
    }
}

<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\Client;
use App\Models\SatUsoCFDI;
use App\Models\SatRegFisc;
use App\Models\PagoForma;
use App\Models\PagoMetodo;
use App\Models\DirSatPais;
use App\Http\Controllers\ClientController;

class ClientControllerTest extends TestCase
{
    public function testGetByRFCReturnsClientInformationIfExists()
    {
        // Crear un cliente de ejemplo en la base de datos
        $client = Client::factory()->create([
            'RFC' => 'AGO150812H27',
            // Incluir otros campos necesarios para el cliente
        ]);

        // Mockear los catálogos necesarios
        DirSatPais::shouldReceive('all')->andReturn([]);
        SatUsoCFDI::shouldReceive('all')->andReturn([]);
        SatRegFisc::shouldReceive('all')->andReturn([]);
        PagoForma::shouldReceive('all')->andReturn([]);
        PagoMetodo::shouldReceive('all')->andReturn([]);

        // Llamar al método getByRFC del controlador con el RFC del cliente creado
        $controller = new ClientController();
        $response = $controller->getByRFC('RFC_DE_EJEMPLO');

        // Verificar que la respuesta tenga un código de estado 200 (OK)
        $this->assertEquals(200, $response->getStatusCode());

        // Verificar que la respuesta sea un JSON
        $this->assertJson($response->getContent());

        // Verificar que la respuesta incluya la información del cliente y los catálogos
        $this->assertArrayHasKey('nombre', $response->json());
        $this->assertArrayHasKey('rfc', $response->json());
        // Agregar más verificaciones para otros campos del cliente y catálogos si es necesario
    }
}

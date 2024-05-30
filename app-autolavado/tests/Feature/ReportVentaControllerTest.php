<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\VentaWeb;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class ReportVentaControllerTest extends TestCase
{


    /** @test */
    public function testIndexWithoutFilters()
    {
        Log::info('Inicio de prueba: testIndexWithoutFilters');

        $response = $this->getJson('/ventas');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => ['VENTA', 'F_EMISION', 'CLIENTE', /* otros campos... */]
                 ]);

        Log::info('Prueba testIndexWithoutFilters completada', ['status' => $response->status()]);
    }

    /** @test */
    public function testIndexWithDateFilters()
    {
        Log::info('Inicio de prueba: testIndexWithDateFilters');

        $response = $this->getJson('/ventas?F_EMISION_inicial=2024-04-01&F_EMISION_final=2024-06-01');

        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonStructure([
                     '*' => ['VENTA', 'F_EMISION', 'CLIENTE', /* otros campos... */]
                 ]);

        Log::info('Prueba testIndexWithDateFilters completada', ['status' => $response->status()]);
    }

    /** @test */
    public function testShowVenta()
    {
        Log::info('Inicio de prueba: testShowVenta');

        $response = $this->getJson('/ventas/1');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'venta' => ['VENTA', 'F_EMISION', 'CLIENTE', /* otros campos... */],
                     'cliente' => ['CLIENTE', 'NOMBRE', /* otros campos... */]
                 ]);

        Log::info('Prueba testShowVenta completada', ['status' => $response->status()]);
    }

    /** @test */
    public function testShowVentaNotFound()
    {
        Log::info('Inicio de prueba: testShowVentaNotFound');

        $response = $this->getJson('/ventas/1');

        $response->assertStatus(404)
                 ->assertJson(['message' => 'Venta no encontrada']);

        Log::info('Prueba testShowVentaNotFound completada', ['status' => $response->status()]);
    }

    /** @test */
    public function testStoreVenta()
    {
        Log::info('Inicio de prueba: testStoreVenta');

        $data = [
            'VENTA' => 2,
            'F_EMISION' => '2024-05-10',
            'CLIENTE' => 1,
            // otros campos necesarios...
        ];

        $response = $this->postJson('/ventas', $data);

        $response->assertStatus(201)
                 ->assertJson($data);

        $this->assertDatabaseHas('ventas_web', $data);

        Log::info('Prueba testStoreVenta completada', ['status' => $response->status()]);
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\VentaWeb;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class FacturacionControllerTest extends TestCase
{

    /**
     * Test facturación de un ticket existente.
     *
     * @return void
     */
    public function testFacturarTicketExistente()
    {
        try {
            Log::info('Inicio de prueba: testFacturarTicketExistente');

            // Preparar datos de entrada
            $ticket = 'TCKT001';
            $rfc = 'XYZ123456789';

            Log::info('Datos preparados', ['ticket' => $ticket, 'RFC' => $rfc]);

            // Realizar la petición
            $response = $this->postJson('/facturar-ticket', [
                'ticket' => $ticket,
                'RFC' => $rfc
            ]);

            Log::info('Solicitud enviada', ['endpoint' => '/facturar-ticket', 'data' => ['ticket' => $ticket, 'RFC' => $rfc]]);

            // Verificar resultados
            $response->assertStatus(200)
                     ->assertJson(['message' => 'Ticket facturado correctamente']);

            Log::info('Respuesta recibida y verificada', ['status' => $response->status(), 'response' => $response->json()]);

            // Verificar que la factura se ha registrado correctamente
            $this->assertDatabaseHas('ventas_web', [
                'Ticket' => 'TCKT001',
                'serieDocumento' => 'F001-',
                'ventaremota' => 'NO',
                'enfac' => 1 // Asegurarse de que 'enfac' se actualizó a 1
            ]);

            Log::info('Verificación de base de datos completada', [
                'table' => 'ventas_web',
                'expected' => ['serieDocumento' => 'F001-', 'ventaremota' => 'NO', 'enfac' => 1]
            ]);

            Log::info('Prueba de facturación exitosa completada', ['ticket' => $ticket]);
        } catch (\Exception $e) {
            Log::error('Error durante la prueba testFacturarTicketExistente', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e; // Re-lanzar la excepción para que el framework de pruebas la maneje
        }
    }

    /**
     * Test facturación de un ticket que no existe.
     *
     * @return void
     */
    public function testFacturarTicketNoExistente()
    {
        try {
            Log::info('Inicio de prueba: testFacturarTicketNoExistente');

            // Preparar datos de entrada
            $ticket = '67890';
            $rfc = 'DEF123456789';

            Log::info('Datos preparados', ['ticket' => $ticket, 'rfc' => $rfc]);

            // Realizar la petición
            $response = $this->postJson('/facturar-ticket', [
                'ticket' => $ticket,
                'rfc' => $rfc
            ]);

            Log::info('Solicitud enviada', ['endpoint' => '/facturar-ticket', 'data' => ['ticket' => $ticket, 'rfc' => $rfc]]);

            // Verificar resultados
            $response->assertStatus(400)
                     ->assertJson(['error_code' => 'TICKET_NOT_EXISTS']);

            Log::info('Respuesta recibida y verificada', ['status' => $response->status(), 'response' => $response->json()]);

            Log::info('Prueba de facturación fallida por ticket no existente', ['ticket' => $ticket]);
        } catch (\Exception $e) {
            Log::error('Error durante la prueba testFacturarTicketNoExistente', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e; // Re-lanzar la excepción para que el framework de pruebas la maneje
        }
    }
}


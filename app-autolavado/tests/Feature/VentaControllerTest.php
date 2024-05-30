<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\VentaWeb;

class VentaControllerTest extends TestCase
{

    public function testGetDocumentos()
    {


        $response = $this->postjson('/ventas/documentos', [
            'rfc' => 'XYZ123456789',
            'inicio' => '2024-05-01',
            'fin' => '2024-05-31',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'ventas' => [
                '*' => [
                    'ventaremota',
                    'venta',
                    'LogCFDI',
                    'no_referen',
                    'f_emision',
                    'importe',
                    'impuesto',
                    'total',
                    'moneda',
                    'UUID',
                ],
            ],
        ]);
        $response->assertJson([
            'ventas' => [
                [
                    'f_emision' => '2024-05-10',
                    'importe' => 100.00,
                    'impuesto' => 16.00,
                ],
            ],
        ]);
    }

    public function testGetDocumentosMissingRFC()
    {
        $response = $this->json('POST', '/ruta-de-tu-endpoint', [
            'inicio' => '2024-05-01',
            'fin' => '2024-05-31',
        ]);

        $response->assertStatus(400);
        $response->assertJson(['error_code' => 'RFC_EMPTY']);
    }

    public function testGetDocumentosMissingInicio()
    {
        $response = $this->json('POST', '/ruta-de-tu-endpoint', [
            'rfc' => 'TESTRFC123',
            'fin' => '2024-05-31',
        ]);

        $response->assertStatus(400);
        $response->assertJson(['error_code' => 'INICIO_NOT_FOUND']);
    }

    public function testGetDocumentosMissingFin()
    {
        $response = $this->json('POST', '/ruta-de-tu-endpoint', [
            'rfc' => 'TESTRFC123',
            'inicio' => '2024-05-01',
        ]);

        $response->assertStatus(400);
        $response->assertJson(['error_code' => 'FIN_NOT_FOUND']);
    }
}

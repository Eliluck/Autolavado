<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\CheckRFCController;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CheckRFCControllerTest extends TestCase
{
    public function test_checkRFC_returns_true_if_client_exists()
    {
        // Configurar la solicitud con el RFC del cliente existente en la base de datos
        $existingRFC = 'AGO150812H27';
        $sucursal = '601'; // La sucursal asociada al cliente existente
        $request = new Request(['rfc' => $existingRFC, 'sucursal' => $sucursal]);

        // Configurar la sesión en la solicitud
        $request->setLaravelSession(app('session')->driver());

        // Realizar la solicitud al controlador
        $controller = new CheckRFCController();
        $response = $controller->checkRFC($request);

        // Verificar que la respuesta sea un JSON con 'exists' igual a true
        $this->assertTrue($response->getData()->exists);

        // Registrar un mensaje de información sobre el resultado de la solicitud
        Log::info('Solicitud procesada exitosamente.');

        // Verificar que se registre la información en el log de Laravel
        $this->assertLogContains("Consulta de RFC existente: RFC=$existingRFC, Sucursal=$sucursal");

        // Log adicional
        Log::info('Prueba unitaria completada.');
    }

    protected function assertLogContains($expected)
    {
        $logContent = file_get_contents(storage_path('logs/laravel.log'));
        $this->assertStringContainsString($expected, $logContent);
    }
}

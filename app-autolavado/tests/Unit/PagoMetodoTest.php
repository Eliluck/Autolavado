<?php

namespace Tests\Unit\Models;

use App\Models\PagoMetodo;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class PagoMetodoTest extends TestCase
{


    public function setUp(): void
    {
        parent::setUp();
        // Configuración previa necesaria para cada prueba
    }

    public function testCreatePagoMetodoLogsCorrectly()
    {
        Log::spy();

        // Crear instancia y guardar en la base de datos
        $pagoMetodo = PagoMetodo::create([
            'Codigo' => '001',
            'Descrip' => 'Efectivo',
            'Usuario' => 'admin',
            'UsuFecha' => now(),
            'UsuHora' => now()->format('H:i:s')
        ]);

        // Verificar que se creó correctamente y que se generó el log adecuado
        Log::shouldHaveReceived('info')->once()->with('Nuevo método de pago creado', [
            'codigo' => '001',
            'descripcion' => 'Efectivo'
        ]);

        $this->assertDatabaseHas('pagometodo', [
            'Codigo' => '001',
            'Descrip' => 'Efectivo'
        ]);
    }

    protected function tearDown(): void
    {
        // Limpiar después de cada prueba si es necesario
        parent::tearDown();
    }
}

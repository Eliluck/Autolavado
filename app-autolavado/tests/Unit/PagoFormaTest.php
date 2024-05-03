<?php

namespace Tests\Unit\Models;

use App\Models\PagoForma;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class PagoFormaTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        // Configuración previa necesaria para cada prueba
    }

    public function testCreatePagoFormaLogsCorrectly()
    {
        Log::spy();

        // Crear instancia y guardar en la base de datos
        $pagoForma = PagoForma::create([
            'Codigo' => '001',
            'Descrip' => 'Efectivo',
            'Usuario' => 'admin',
            'UsuFecha' => now(),
            'UsuHora' => now()->format('H:i:s')
        ]);

        // Verificar que se creó correctamente y que se generó el log adecuado
        Log::shouldHaveReceived('info')->once()->with('Nueva forma de pago creada', [
            'codigo' => '001',
            'descripcion' => 'Efectivo'
        ]);

        $this->assertDatabaseHas('PagoFormas', [
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

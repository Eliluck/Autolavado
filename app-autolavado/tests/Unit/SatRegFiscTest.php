<?php

namespace Tests\Unit\Models;

use App\Models\SatRegFisc;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class SatRegFiscTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        // Configuración previa necesaria para cada prueba
    }

    public function testCreateSatRegFiscLogsCorrectly()
    {
        Log::spy();

        // Crear instancia y guardar en la base de datos
        $satRegFisc = SatRegFisc::create([
            'Regimen' => '601',
            'Descrip' => 'General de Ley Personas Morales',
            'Usuario' => 'admin'
        ]);

        // Verificar que se creó correctamente y que se generó el log adecuado
        Log::shouldHaveReceived('info')->once()->with('Nuevo régimen fiscal creado', [
            'regimen' => '601',
            'descripcion' => 'General de Ley Personas Morales',
            'usuario' => 'admin'
        ]);

        $this->assertDatabaseHas('sat_regfisc', [
            'Regimen' => '601',
            'Descrip' => 'General de Ley Personas Morales'
        ]);
    }


    protected function tearDown(): void
    {
        // Limpiar después de cada prueba si es necesario
        parent::tearDown();
    }
}

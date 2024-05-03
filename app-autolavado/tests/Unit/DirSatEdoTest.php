<?php

namespace Tests\Unit\Models;

use App\Models\DirSatEdo;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirSatEdoTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de prueba o cualquier configuración necesaria
    }

    public function testLogRetrievalByCode()
    {
        $stateCode = '001';

        // Espiar los logs para verificar que el método registra la información correctamente
        Log::spy();

        // Llamar al método que se está probando
        DirSatEdo::logRetrievalByCode($stateCode);

        // Afirmar que se ha registrado la información correcta en los logs
        Log::shouldHaveReceived('info')->once()->with("Retrieved state by code: EdoCod=$stateCode");

        // No hay necesidad de limpiar después de esta prueba, ya que no se modifican datos ni estados
    }

    public function tearDown(): void
    {
        // Limpiar o restablecer cualquier configuración si es necesario
        parent::tearDown();
    }
}


<?php

namespace Tests\Unit\Models;

use App\Models\DirStaPais;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirStaPaisTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        // Preparar el entorno de prueba o cualquier configuración necesaria
    }

    public function testLogIsWrittenWhenCountryIsCreated()
    {
        Log::spy();

        // Crear un nuevo registro
        $country = DirStaPais::create([
            'PaisCod' => 'MX',
            'PaisNom' => 'México'
        ]);

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('info')->once()->with('Nuevo registro creado en la tabla DirStaPais', ['PaisCod' => $country->PaisCod]);
    }

    public function testLogIsWrittenWhenCountryIsUpdated()
    {
        $country = DirStaPais::create([
            'PaisCod' => 'US',
            'PaisNom' => 'United States'
        ]);

        Log::spy();

        // Actualizar el registro
        $country->update(['PaisNom' => 'USA']);

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('info')->once()->with('Registro actualizado en la tabla DirStaPais', ['PaisCod' => $country->PaisCod]);
    }

    public function testLogIsWrittenWhenCountryIsDeleted()
    {
        $country = DirStaPais::create([
            'PaisCod' => 'CA',
            'PaisNom' => 'Canada'
        ]);

        Log::spy();

        // Eliminar el registro
        $country->delete();

        // Verificar que el log es registrado correctamente
        Log::shouldHaveReceived('info')->once()->with('Registro eliminado en la tabla DirStaPais', ['PaisCod' => $country->PaisCod]);
    }

    public function tearDown(): void
    {
        // Limpiar la base de datos o restablecer cualquier configuración
        parent::tearDown();
    }
}

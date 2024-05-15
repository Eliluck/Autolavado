<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DirSatEdoControllerTest extends TestCase
{
    /**
     * Test para verificar la obtención del estado por código postal.
     *
     * @return void
     */
    public function testGetEstadoPorCP()
    {
        Log::info('Iniciando prueba: testGetEstadoPorCP');

        // Asumiendo que '01100' debería retornar al menos un resultado
        Log::info('Realizando solicitud GET para obtener estado por CP', ['cp' => '01201']);
        $response = $this->getJson('/estado/01201'); // Ajusta esta ruta según la definición de tus rutas API

        Log::info('Verificando estado de la respuesta y estructura del JSON');
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => [ // Usamos '*' si esperamos un array de estados, o elimina '*' si esperas un objeto único
                         'EdoNom',
                         'EdoCod',
                         'CP'
                     ]
                 ]);

        Log::info('Prueba testGetEstadoPorCP completada con éxito');
    }

    /**
     * Test para verificar la respuesta cuando no se encuentran estados para el código postal.
     *
     * @return void
     */
    public function testGetEstadoPorCPNotFound()
    {
        Log::info('Iniciando prueba: testGetEstadoPorCPNotFound');

        // Utiliza un código postal que sabes que no debería tener estados asociados
        Log::info('Realizando solicitud GET para obtener estado por un CP inexistente', ['cp' => '00000']);
        $response = $this->getJson('/api/estado/00000'); // Ajusta esta ruta según tus necesidades

        Log::info('Verificando estado de la respuesta para CP inexistente');
        $response->assertStatus(404); // Asegúrate de que tu controlador realmente devuelva 404 cuando no hay datos

        Log::info('Prueba testGetEstadoPorCPNotFound completada con éxito');
    }
}

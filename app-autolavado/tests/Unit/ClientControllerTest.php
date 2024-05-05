<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class ClientControllerTest extends TestCase
{

    /**
     * Test for creating a new client.
     *
     * @return void
     */
    public function test_create_client()
{
    // Crear un nuevo cliente
    $clientData = [
        'CLIENTE' => 11,
        'NOMBRE' => 'John Doe',
        // Agrega aquí los demás campos necesarios
    ];

    // Guardar el cliente en la base de datos
    Client::create($clientData);

    // Verificar que el cliente fue creado correctamente
    $this->assertDatabaseHas('client', $clientData);

    // Verificar que se registró el evento de creación en el log

    return $clientData;
}



    /**
     * Test for deleting a client.
     *
     * @return void
     */
    public function test_delete_client($clientData)
    {
        // Eliminar el cliente de la base de datos directamente mediante una consulta SQL
        Client::where('CLIENTE', $clientData['CLIENTE'])->delete();

        // Verificar que los campos del cliente fueron eliminados correctamente
        $this->assertDatabaseMissing('client', $clientData);

        // Verificar que se registró el evento de eliminación en el log
    }
}

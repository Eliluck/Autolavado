<?php

namespace Tests\Unit\Models;

use App\Models\Sucursal;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SucursalTest extends TestCase
{
    use RefreshDatabase; // Asegura que cada prueba se ejecute con una base de datos limpia

    public function testCreateSucursal()
    {
        // Crear una instancia de Sucursal
        $sucursal = new Sucursal([
            'Sucursal' => 'Sucursal Central',
            'Calle' => 'Av. Principal',
            'NumeroExterior' => '1000',
            'NumeroInterior' => '2A',
            'Colonia' => 'Centro',
            'CP' => '78000',
            'Localidad' => 'Capital',
            'Municipio' => 'Capital',
            'Estado' => 'Estado',
            'Pais' => 'MX',
            'Serie' => 'A',
            'Folio' => '100',
            'SerieTck' => 'TCK1',
            'PreCte' => '0001',
        ]);

        $sucursal->save();

        // Verificar que el registro existe en la base de datos
        $this->assertDatabaseHas('CFD_Suc_Web', [
            'Sucursal' => 'Sucursal Central',
            'CP' => '78000'
        ]);
    }

    public function testUpdateSucursal()
    {
        // Crear y guardar la instancia inicial
        $sucursal = Sucursal::create([
            'Sucursal' => 'Sucursal Norte',
            'Calle' => 'Calle Norte',
            'NumeroExterior' => '200',
            'NumeroInterior' => '1B',
            'Colonia' => 'Norte',
            'CP' => '78500',
            'Localidad' => 'Norte',
            'Municipio' => 'Capital Norte',
            'Estado' => 'Estado Norte',
            'Pais' => 'MX',
            'Serie' => 'B',
            'Folio' => '200',
            'SerieTck' => 'TCK2',
            'PreCte' => '0002',
        ]);

        // Actualizar información
        $sucursal->update(['Calle' => 'Calle Actualizada']);

        // Verificar que la actualización es correcta en la base de datos
        $this->assertDatabaseHas('CFD_Suc_Web', [
            'Sucursal' => 'Sucursal Norte',
            'Calle' => 'Calle Actualizada'
        ]);
    }

    public function testDeleteSucursal()
    {
        // Crear y guardar la instancia
        $sucursal = Sucursal::create([
            'Sucursal' => 'Sucursal Sur',
            'Calle' => 'Calle Sur',
            'NumeroExterior' => '300',
            'NumeroInterior' => '2C',
            'Colonia' => 'Sur',
            'CP' => '79000',
            'Localidad' => 'Sur',
            'Municipio' => 'Capital Sur',
            'Estado' => 'Estado Sur',
            'Pais' => 'MX',
            'Serie' => 'C',
            'Folio' => '300',
            'SerieTck' => 'TCK3',
            'PreCte' => '0003',
        ]);

        $id = $sucursal->id;

        // Eliminar la sucursal
        $sucursal->delete();

        // Verificar que se eliminó correctamente
        $this->assertDatabaseMissing('CFD_Suc_Web', ['id' => $id]);
    }
}

<?php

namespace Tests\Unit\Models;

use App\Models\VentaWeb;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class VentaWebTest extends TestCase
{

    /** @test */
    public function new_venta_web()
    {
        // Simulamos que se espera un registro de log con el mensaje correcto
        Log::shouldReceive('info')->once()->withArgs(['Nueva venta creada', ['venta_id' => 1]]);

        // Creamos una nueva venta en la base de datos
        $ventaWeb = VentaWeb::create([
            'VENTA' => 1,
            'OCUPADO' => 'ocupado',
        ]);
    }

    /** @test */
    public function it_logs_update_of_venta_web()
    {
        // Creamos una venta inicial en la base de datos
        $ventaWeb = VentaWeb::create([
            'VENTA' => 1,
            'OCUPADO' => 'ocupado_value', // Puedes llenar otros campos según sea necesario
        ]);

        // Simulamos que se espera un registro de log con el mensaje correcto
        Log::shouldReceive('info')->once()->withArgs(['Venta actualizada', ['venta_id' => 1]]);

        // Actualizamos la venta y verificamos que se registre correctamente en el log
        $ventaWeb->update([
            'OCUPADO' => 'new_ocupado_value', // Puedes actualizar otros campos según sea necesario
        ]);
    }

    /** @test */
    public function it_logs_deletion_of_venta_web()
    {
        // Creamos una venta inicial en la base de datos
        $ventaWeb = VentaWeb::create([
            'VENTA' => 1,
            'OCUPADO' => 'ocupado_value', // Puedes llenar otros campos según sea necesario
        ]);

        // Simulamos que se espera un registro de log con el mensaje correcto
        Log::shouldReceive('info')->once()->withArgs(['Venta eliminada', ['venta_id' => 1]]);

        // Eliminamos la venta y verificamos que se registre correctamente en el log
        $ventaWeb->delete();
    }
}

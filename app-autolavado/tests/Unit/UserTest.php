<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class UserTest extends TestCase
{

    public function testUserCreation()
    {
        // Crear una instancia de User y guardarla en la base de datos
        $user = new User([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
        ]);

        $user->save();

        // Verificar que el usuario fue guardado correctamente
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com'
        ]);

        // Verificar que el password está hasheado
        $this->assertTrue(Hash::check('password', $user->password), 'The password should be hashed');

        // Verificar que los atributos ocultos no son visibles
        $this->assertArrayNotHasKey('password', $user->toArray());
        $this->assertArrayNotHasKey('remember_token', $user->toArray());
    }

    public function testUserCanUpdate()
    {
        // Crear y guardar una instancia de User
        $user = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
        ]);

        // Actualizar información del usuario
        $user->name = 'Jane Smith';
        $user->save();

        // Verificar que los cambios se reflejen en la base de datos
        $this->assertDatabaseHas('users', [
            'email' => 'jane@example.com',
            'name' => 'Jane Smith'
        ]);
    }

    /*public function testUserCanDelete() //falta ver por que no deja borrar el email
    {
        // Crear y guardar una instancia de User
        $user = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
        ]);

        // Eliminar el usuario
        $user->delete();

        // Verificar que el usuario ya no existe en la base de datos
        $this->assertDatabaseMissing('users', [
            'email' => 'jane@example.com'
        ]);
    }*/
}

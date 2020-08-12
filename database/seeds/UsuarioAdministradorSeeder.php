<?php

use App\Models\seguridad\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create([
            'usuarios' =>'eduard',
            'nombre' =>'Administrador',
            'email' =>'eduard_0412@hotmail.com',
            'password' => '12345'
        ]);
        $usuario->roles()->sync(1);
    }
}

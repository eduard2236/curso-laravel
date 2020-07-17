<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Usuarios')->insert([ 
            'usuario' =>'biblioteca_admin',
            'password' => bcrypt('pass123')
        ]);
    }
}

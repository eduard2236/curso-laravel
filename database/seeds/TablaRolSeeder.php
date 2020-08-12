<?php

use App\Models\Admin\Rol;
use Illuminate\Database\Seeder;


class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rol as $key => $value){
           Rol::create([
            'nombre' => $value,
            ]);
        }
    }
}

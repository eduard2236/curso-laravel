<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->truncateTablas([
            
            'menu',
            'permiso',
            'rol',
            'menu_rol',
            'permiso_rol',
            'usuario',
            'usuario_rol'
        ]);
        //$this->call(UsuarioAdministradorSeeder::class);
        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
        $this->call(TableMenuSeeder::class);
        $this->call(TableMenuRolSeeder::class);
        $this->call(UsuarioAdministradorSeeder::class);
        //$this->call(nuevomenu::class);
        //$this->call(TablaMenuRolSeeder::class);
    }
    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        db::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

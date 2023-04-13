<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class TableMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $menus = [
            array('id' => '1', 'menu_id' => '8', 'nombre' => 'Menus', 'url' => 'admin/menu', 'orden' => '1', 'icono' => 'fa-list', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'menu_id' => '8', 'nombre' => 'Menu Rol', 'url' => 'admin/menu-rol', 'orden' => '2', 'icono' => 'fa-check', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'menu_id' => '8', 'nombre' => 'Roles', 'url' => 'admin/rol', 'orden' => '5', 'icono' => 'fa-users', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'menu_id' => '8', 'nombre' => 'Permisos', 'url' => 'admin/permiso', 'orden' => '3', 'icono' => 'fa-lock', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '5', 'menu_id' => '8', 'nombre' => 'Usuarios', 'url' => 'admin/usuario', 'orden' => '6', 'icono' => 'fa-user', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '6', 'menu_id' => '0', 'nombre' => 'Libros', 'url' => 'libro', 'orden' => '2', 'icono' => 'fa-book', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '7', 'menu_id' => '0', 'nombre' => 'Libro prestamo', 'url' => 'libro-prestamo', 'orden' => '3', 'icono' => 'fa-book-open', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '8', 'menu_id' => '0', 'nombre' => 'Administrador', 'url' => '#', 'orden' => '1', 'icono' => 'fa-bars', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '9', 'menu_id' => '8', 'nombre' => 'Perimiso Rol', 'url' => 'admin/permiso-rol', 'orden' => '4', 'icono' => 'fa-lock-open', 'created_at' => $now, 'updated_at' => $now)
        ];
        DB::table('menu')->insert($menus);
    }
}

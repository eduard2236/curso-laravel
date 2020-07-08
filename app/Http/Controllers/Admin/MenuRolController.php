<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use App\Models\Admin\Rol;
use Illuminate\Http\Request;

class MenuRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $menus = Menu::getMenu();
        $menusRols = Menu::with('roles')->get()->pluck('roles', 'id')->toArray();
        return view('admin.menu-rol.index',compact('rols', 'menus', 'menusRols'));
    }

    public function guardar(Request $request)
    {
        if ($request->ajax()){
            $menus = new Menu();
            if ($request->input('estado')== 1){
                $menus->find($request->input('menu_id'))->roles()->attach($request->input('rol_id'));
            } else{
                $menus->find($request->input('menu_id'))->roles()->detach($request->input('rol_id'));
            }
        }else{
            abort(404);
        }
    }
}

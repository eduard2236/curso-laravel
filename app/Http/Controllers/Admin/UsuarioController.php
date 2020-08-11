<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Rol;
use App\Models\seguridad\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $datas = Usuario::orderBy('id')->get();
        return view('admin.usuario.index',compact('datas'));
     }

    public function crear()
    {
        $rols = Rol::orderby('id')->pluck('nombre', 'id')->toArray();
        return view('admin.usuario.crear',compact('rols'));
    }

    public function guardar(ValidacionUsuario $request)
    {
        $usuario = Usuario::create($request->all());
        $usuario->roles()->attach($request->rol_id);
        return redirect('admin/usuario')->with('mensaje' , ' Usuario Creado Con Exito ');
    }
    public function mostrar($id)
    {
        //
    }

    public function editar($id)
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $data = Usuario::with('roles')->findOrFail($id);
        return view('admin.usuario.editar', compact('data', 'rols'));
    }

    public function actualizar(ValidacionUsuario $request, $id)
    {
        Usuario::findOrFail($id)->update(array_filter($request->all()));
        return redirect('admin/usuario')->with('mensaje', 'Usuario actualizado con exito');
    }

    public function eliminar($id)
    {
        //
    }
}

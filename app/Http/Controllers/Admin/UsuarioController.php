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
        $datas = Usuario::with('roles:id,nombre')->orderBy('id')->get();
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
        $usuario->roles()->sync($request->rol_id);
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
        $usuario = Usuario::findOrFail($id);
        $usuario->update(array_filter($request->all()));
        $usuario->roles()->sync($request->rol_id);
        return redirect('admin/usuario')->with('mensaje', 'Usuario actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            $usuario = Usuario::findOrFail($id);
            $usuario->roles()->detach();
            $usuario->delete();
            return response()->json(['mensaje' =>'ok']);
        } else{
            abort(404);
        }
    }
}

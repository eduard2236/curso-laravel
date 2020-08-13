<?php

namespace App\Models\seguridad;

use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    protected $remenber_token = false;
    protected $table= 'usuario';
    protected $fillable = ['usuarios', 'nombre', 'email','password'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }
    public function setSession($roles)
    {
        Session::put(
            [
                'usuario' => $this->usuarios,
                'usuario_id'  => $this-> id,
                'nombre_usuario' => $this->nombre 
            ]
        );
        if (count($roles) == 1){
           Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles [0]['nombre'],  
                ]
            );
        } else {
            Session::put('roles' , $roles);
        }
    }
    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
}
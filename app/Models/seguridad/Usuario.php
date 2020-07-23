<?php

namespace App\Models\seguridad;

use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    protected $remenber_token = false;
    protected $table= 'usuario';
    protected $fillable = ['usuarios', 'nombre', 'password'];
    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }
    public function setSession($roles)
    {
        if (count($roles) == 1){
           Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles [0]['nombre'],
                    'usuario' => $this->usuarios,
                    'usuario_id'  => $this-> id,
                    'nombre_usuario' => $this->nombre   
                ]
            );
        }
    }
}
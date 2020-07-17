<?php

namespace App\Models\seguridad;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $remenber_token = false;
    protected $table= 'usuario';
    protected $fillable = ['usuarios', 'nombre', 'password'];
    protected $guarded = ['id'];
}

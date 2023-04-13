<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NuevoMenu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre', 'url', 'icono'];
    protected $guarded = ['id'];
}

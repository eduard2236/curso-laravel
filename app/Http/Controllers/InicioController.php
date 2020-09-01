<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionLibro;
use App\Models\Libro;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function index(Libro $libro)
        {
            return view('inicio', compact('libro'));
        }
}
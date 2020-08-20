<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioSesionController extends Controller
{
     public function index()
    {
        
     return view('Inicio_Sesion/registro');
        
    }
}

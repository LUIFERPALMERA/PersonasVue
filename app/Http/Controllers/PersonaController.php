<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function obtenerPersonas(Request $request){
        if($request->ajax()){

        }
        return view('index');
    }
    public function guardarPersona(Request $request){
        if($request->ajax()){

        }
        return view('index');
    }
    public function actualizarPersona(Request $request){
        if($request->ajax()){

        }
        return view('index');
    }
    public function eliminarPersona(Request $request){
        if($request->ajax()){

        }
        return view('index');
    }
}

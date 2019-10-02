<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    //Accion principal
    function index(){
        return view('prueba.index')
        ->with('array',array('perro','gato','hamster'));        
    }
    //PROBANDO HELPER ACTION()
    function edit(){
        return view('contact');

    }
    //PROBANDO HELPER ACTION()
    function create(){
        return view('perfil.perfil');

    }

}


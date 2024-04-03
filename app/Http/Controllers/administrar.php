<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;


class administrar extends Controller
{
    //
    public function index()
    {
        //recibir los datos de la base de datos
        $comentarios['comentarios']=Comentario::all();
        
        return view('administrar.index',$comentarios);
    }
    public function misionvision(){
        return view('administrar.misionvision');
    }
    public function horarios(){
        return view('administrar.horarios');
    }
    public function menu(){
        return view('administrar.menu');
    }

}

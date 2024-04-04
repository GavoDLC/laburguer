<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;
use App\Models\categorias;



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
        $leerdatos['lista']=Categorias::all();
        return view('administrar.menu',$leerdatos);
    }
    public function crearplatillo(){
        $leerdatos['lista']=Categorias::all();

        return view('administrar.crearplatillo',$leerdatos);
    }

    public function storeindex(Request $request){
        $datosrecibidos=request()->all();
        Categorias::create($datosrecibidos);
        // print_r($_POST);
        return redirect('/admin/menu');
    }
    public function eliminar(){
        return redirect('/admin/menu');
    }
    public function eliminarCategoria($id){
        $categoria = Categorias::findOrFail($id);
        $categoria->delete();
        return redirect('/admin/menu');
    }

}

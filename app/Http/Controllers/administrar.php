<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;
use App\Models\categorias;
use App\Models\platillos;
use Illuminate\Support\Facades\Storage;



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
        $menu['platillos']=Platillos::paginate(10);
        return view('administrar.menu',$leerdatos,$menu);
    }
    public function crearplatillo(){
        $leerdatos['lista']=Categorias::all();

        return view('administrar.crearplatillo',$leerdatos);
    }
    public function editarplatillo($id){
        $leerdatos['lista']=Categorias::all();
        $datosplatillo=Platillos::findOrFail($id);

        return view('administrar.editarplatillo',$leerdatos, compact('datosplatillo'));
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
    public function storeplatillo(Request $request){
        // $datosplatillo=request()->all();
        //insertar imagen
        $datosplatillo=request()->except('_token');
        if ($request->hasFile('imagen')) {
            $datosplatillo['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Platillos::insert($datosplatillo);


        // return response()->json($datosplatillo);
        return redirect('/admin/menu');
    }
    public function eliminarplatillo($id){
        $categoria = Platillos::findOrFail($id);
        if (Storage::delete('public/'.$categoria->imagen)) {
            Platillos::destroy($id);

        }
        $categoria->delete();
        return redirect('/admin/menu');
    }
    public function updateplatillo(Request $request, $id){
        $datosplatillo=request()->except(['_token','_method']);
        if ($request->hasFile('imagen')) {
            $categoria = Platillos::findOrFail($id);
            Storage::delete('public/'.$categoria->imagen);
            $datosplatillo['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Platillos::where('id','=',$id)->update($datosplatillo);
        $datosplatillo=Platillos::findOrFail($id);
        $leerdatos['lista']=Categorias::all();


        $datos=Platillos::findOrFail($id);
        return view('administrar.editarplatillo',$leerdatos,compact('datos','datosplatillo'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\platillos;

class cliente extends Controller
{
    //
    public function menucliente(){
        $leerdatos['lista']=Categorias::all();
        $menu['platillos']=Platillos::paginate(10);
        return view('burguesia.menu',$leerdatos,$menu);
    }
}

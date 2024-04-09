<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Models\Burguesia;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ComentarioController;
use App\Http\controllers\administrar;
use App\Http\controllers\cliente;



// Route::get('/',function(){
//     return view("burguesia.index");
// });
Route::get('/', [ComentarioController::class,'index']);
Route::post('/',[ComentarioController::class,'store']);
// Route::post('/',function(){
//     print_r($_POST);
// });

Route::get('/menu',function(){
    return view("burguesia.menu");
});
Route::get('/menu',[cliente::class,"menucliente"]);




Route::get('/misionvision',function(){
    return view("burguesia.misionvision");
});
Route::get('/horarios', function(){
    return view('burguesia.horarios');
});
Route::get('/quienesSomos', function(){
    return view('burguesia.quienesSomos');
});


Route::get('/admin',[administrar::class,"index"]);
Route::get('/admin/misionvision',[administrar::class,"misionvision"]);
Route::get('/admin/horarios',[administrar::class,"horarios"]);
Route::get('/admin/menu',[administrar::class,"menu"]);

Route::post('/admin/menu/crearcategoria',[administrar::class,"storeindex"])->name('crearcategoria');

Route::delete('/admin/menu/{id}',[administrar::class,"eliminarCategoria"])->name('categorias.eliminar');
Route::post('/admin/menu',[administrar::class,"storeplatillo"])->name('platillo.crear');
// Route::post('/admin/menu',[administrar::class,"eliminarplatillo"])->name('platillo.eliminar');
Route::delete('/admin/menu/eliminar/{id}',[administrar::class,"eliminarplatillo"]);
Route::get('/admin/menu/editar/{id}',[administrar::class,"editarplatillo"]);
Route::PATCH('/admin/menu/editar/{id}',[administrar::class,"updateplatillo"]);

Route::get('/admin/crearplatillo',[administrar::class,"crearplatillo"]);



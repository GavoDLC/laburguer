<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Models\Burguesia;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ComentarioController;



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
Route::get('/misionvision',function(){
    return view("burguesia.misionvision");
});
Route::get('/horarios', function(){
    return view('burguesia.horarios');
});
Route::get('/quienesSomos', function(){
    return view('burguesia.quienesSomos');
});
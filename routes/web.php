<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use Illuminate\Support\Facades\Route;

Route::get('/',function()
{
    return view('home');
})->name('home');

Route::view('nosotros','nosotros')->name('about');

Route::view('personal','personal')->name('personal');

// Route::get('contactos/{name?}',function($name='Invitado')
// {
//     return view('contactos',compact('name'));
// })->name('contact');

// Route::get('modelos',function()
// {
//     $autos = 
//     [
//         "CHEVROLET"=>'TRACKER',
//         "MAZDA"=>'323',
//         "FORD"=>'RANGER',
//         "KIA"=>'SPORTAGE',
//         "GREAT WALL"=>'WINGLE'
//     ];
//     return view('modelos',compact('autos'));
// })->name('models');


Route::get('modelos',ModeloController::class)->name('models');

Route::get('contactos/{name?}',[ContactoController::class,'dataContact'])->name('contact');


Route::resource('autos',AutoController::class)->except('index','show');

//Route::get('autos','App\Http\Controllers\AutoController@index')->name('allstore');

//Route::delete('autos','App\Http\Controllers\AutoController@destroy')->name('destroystore');




/*

// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO GET
Route::get('/', function () {
    return view('home');
});

// ROUTE PARA PRESENTAR UN TEXTO UTILIZANDO EL MÉTODO GET
Route::get('demo1', function () {
    return 'Hola Laravel';
});

// ROUTE PARA PRESENTAR UN JSON UTILIZANDO EL MÉTODO GET 
Route::get('demo2', function () {
    return '{
        "Nombre":"Byron",
        "Apellido":"Loarte",
        "Ciudad":"Quito"
    }';
});


// PROBLEMA DE LAS RUTAS SIN EL MÉTODO NAME
Route::get('service',function(){
    return'
          <a href="servicios">servicios</a>
          <br>
          <a href="servicios">servicios</a>
          <br>
          <a href="servicios">servicios</a>
          <br>
          <a href="servicios">servicios</a>
    ';
});



// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('personal','personal')->name('personal');


// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO GET
Route::get('contact',function(){
    return view('contactos');
})->name('contact');


// ROUTE PARA MANDAR DATOS A LA VISTA
Route::get('modelos',function()
{
    // ES VÁLIDO PERO SE DEBE RECORDAR QUE PARA TRAER DATOS O PROCESAR 
    // PETICIONES DE LA BDD SE UTILIZA UN CONTROLADOR 
    $autos = 
    [
        "CHEVROLET"=>'TRACKER',
        "MAZDA"=>'323',
        "FORD"=>'RANGER',
        "KIA"=>'SPORTAGE',
        "GREAT WALL"=>'WINGLE'
    ];
    return view('modelos',compact('autos'));
})->name('models');


// PASAR PARAMETROS A LA ROUTE
Route::get('novedades/{name?}',function($name="Invitado"){
    return 'Hola '.$name;
})->name('novedades');



// REDIRECCIONAR RUTAS UTILIANDO EL MÉTODO ROUTE
Route::get('productos/',function(){
    return redirect()->route('novedades');
})->name('productos');

// ROUTE DE TIPO 
// GET
// POST 
// PUT 
// PATCH 
// DELETE 

*/
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/cursos", function(){

    // MANERAS DE ENVIAR DATOS A LA VISTA
   // $nombre = "Wilmer";
   $cursos = array('curso1'=> "Java", 'curso2'=> "php");
    //return view('cursos', compact('nombre'));
    //return view('cursos')->with("nombre", $nombre);
   // return view('cursos', ['nombre'=> $nombre, 'curso1'=> "PHP", 'curso2'=> "VueJS"]);
    return view('tutorial.cursos')->with("cursos", $cursos);
    
});

Route::get("/user/{name}/{id}", function($name, $id){
    return "<h1>este es el usuario " . $name . "y su id es ". $id ."</h1>";
});

//TRABAJANDO CON LOS MODELOS Y CONECTANDO A LA BASE DE DATOS

Route::get('client/{id}', function($id){
    $clients =  App\Models\Client::find($id);
    echo $clients->name;
   });


Route::get('client_name', function(){
    $clients =  App\Models\Client::where('name', "=", "wilmer")->first();
    echo $clients->id;
   });

   Route::get('people', function(){
    $people =  App\Models\Person::all();
        echo $people;
    foreach($people as $person){
        echo $person->name. "<br/>";
    }
    
   });

   Route::get('persons', 'PersonController@mostrarPersons');
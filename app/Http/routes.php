<?php


use App\Servicio;
use App\User;
use App\Role;
use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
Route::get('/lista', 'NuevoController@lista');

Route::get('/insertdatabd', function(){
    DB::insert('insert into servicios(usuario, tituloqueja, descripcionqueja, departamento) values(?,?,?,?)', ['laura.venta', 'Mesa floja', 'Mi se mueve demasiado, no puedo ni escribir', 'Recursos Humanos']);
});

Route::get('/readdatabd', function(){
    $results=DB::select('select * from servicios where id=?', [3]);
    foreach($results as $servicios){
        return $servicios -> usuario;
    }
});


/*
|--------------------------------------------------------------------------
|Crud Aplication
|--------------------------------------------------------------------------
*/

Route::resource('/posts', 'PostsController');

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
|Crud Aplication
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
|Eloquent
|--------------------------------------------------------------------------
*/
/*
Route::get('/encontrardato', function(){
    $servicios = Servicio::find(3);
    return $servicios-> descripcionqueja;
});


Route::get('/insertar', function(){
    $nuevo= new Servicio;
    $nuevo->usuario= 'sonia.coma';
    $nuevo->departamento= 'TI';
    $nuevo->tituloqueja= 'Soy la mejor';
    $nuevo->save();
});

/*
|--------------------------------------------------------------------------
|Eloquent
|--------------------------------------------------------------------------
*/
/*
Route::get('/contact', 'NuevoController@show');





/*
|--------------------------------------------------------------------------
|Relacion de muchos a muchos
|--------------------------------------------------------------------------
*/
/*
Route::get('/user/{id}/role', function(){
    $user=User::find(1);
    foreach($user->roles as $role){
        return $role->name;
    }
});


/*
|--------------------------------------------------------------------------
|Relacion de muchos a muchos
|--------------------------------------------------------------------------
*/

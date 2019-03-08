<?php

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

Route::prefix('admin')->group(function () {
  Route::resource('users','usersController');
  Route::get('users/{id}/destroy',['uses'=>'usersController@destroy', 'as'=>'users.destroy']);

  Route::resource('categories','categoriesController');
  Route::get('categories/{id}/destroy',['uses'=>'categoriesController@destroy', 'as'=>'categories.destroy']);


});



//--------------------------------------------
/*
//Route with function
Route::get('rony', function () {
    return 'Hello World';
});

//Route with parameters
Route::get('rony/{LastName}', function ($lastName) {
    return 'Rony '.$lastName;
});
//Route with default parameters
Route::get('NombreRoute/{Parametro?}', function ($Parametro= "By default") {
    return 'It is parameter'.$Parametro;
});

// Named Route
Route::get('Route',['as'=>'articles',function(){return 'Ready';}]);

//Called Controller from Route : admin/view/1
Route::prefix('admin')->group(function () {
  Route::get('view/{parameter}','TestController@show');
});
//Otra forma: admin/view/1

Route::prefix('admin')->group(function () {
  Route::get('view/{parameter}',['uses'=>'TestController@show', 'as'=>'adminView']);
});

//--------------------------------------
Ruta llamando a una vista
Route::get('/', function () {
    return view('Test.index');
});
*/



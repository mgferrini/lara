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
    //$links = \App\Link::all();

    //return view('welcome', ['links' => $links]);
    return view('home');
});

Route::get('/test', function () {
    //return App\Category::with('subCategory')->where('parent', '=', '0' )->get();
});

Route::get('/category/{numero}/show', 'CategoryController@showCategoryProducts');

Auth::routes();
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');

Route::get('/home', 'HomeController@index')->name('home');

// Route::view('/nombrePagina', 'algunaPagina.php');
// Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba')->middleware('auth');
Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba');
/*
Route::group(['middleware' =>'midllewareGenerico'], function (){
	Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba')->middleware('midllewareEspeficicoParaEstaRuta') ;
	Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba');
	Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba');
	Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba');
});

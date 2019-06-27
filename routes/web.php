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
    return App\Categorie::with('subCategorie')->where('parent', '=', '0' )->get();
});

Auth::routes();
Route::resource('categories', 'CategorieController');

Route::get('/home', 'HomeController@index')->name('home');

// Route::view('/nombrePagina', 'algunaPagina.php');
Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba');

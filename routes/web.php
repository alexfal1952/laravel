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
 Route::resource('/notas', 'NotaController');
/*

Route::get('bienvenida',function(){
	return "hola mundo";
});
Route::get('fotos/{numero?}',function($numero='sin numero'){
	return "hola".$numero ;
})->where('numero','[0-9]+');
Route::view('galeria','fotos',['numero'=>123]);

Route::get('uno',function(){
	return view('uno');
})->name('uno');

Route::get('dos',function(){
	return view('dos');
})->name('dos');

*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
Auth::routes();
Route::delete('/eliminar/{id}', 'NotaController@destroy')->name('notas.eliminar');
Route::get('/crear', 'NotaController@create')->name('notas.crear');

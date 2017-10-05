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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::group(['middleware'=> 'web'],function(){
});
//teste Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('teste','\App\Http\Controllers\TesteController');
  Route::post('teste/{id}/update','\App\Http\Controllers\TesteController@update');
  Route::get('teste/{id}/delete','\App\Http\Controllers\TesteController@destroy');
  Route::get('teste/{id}/deleteMsg','\App\Http\Controllers\TesteController@DeleteMsg');
});

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

// Route::get('/', function () {
//     return view('welcome');
// });
//resource scrive per noi direttamente tutte le rotte necessarie per una CRUD, ogni rotta corrisponde alle funzioni create per noi in controller da laravel
Route::resource('keyboards', 'KeyboardController');
Route::resource('monitors', 'MonitorController');

//esplicitazione di rotte se vogliamo scriverle una alla volta in autonomia
// Route::get('/keyboars', 'KeyboardController@index')->name('keyboards.index');
// Route::get('/keyboars/{keyboard}', 'KeyboardController@show')->name('keyboards.show');
// Route::get('/keyboards/create', 'KeyboardController@create')->name('keyboards.create');

//rotta aggiuntiva di test
Route::delete('/pinco', 'KeyboardController@miaRotta');

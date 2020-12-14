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
Route::get('/user', 'Tim@index');
Route::get('/altauser','Tim@save');
Route::get('/nuevouser', 'Tim@nuevo');
Route::get('/showuser/{id}', 'Tim@show');
Route::get('/actualizaruser','Tim@update');
Route::get('/borrar/{id}','Tim@destroy');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sec1', [
    'uses' => 'Tim@sec1',
    'as' => 'primero'
]);
Route::get('/sec2', [
    'uses' => 'Tim@sec2',
    'as' => 'dos'
]);
Route::get('/sec3', [
    'uses' => 'Tim@sec3',
    'as' => 'tres'
]);
Route::get('/sec4', [
    'uses' => 'Tim@sec4',
    'as' => 'cuatro'
]);
Route::get('/sec5', [
    'uses' => 'Tim@sec5',
    'as' => 'cinco'
]);
Route::get('/dec1', [
    'uses' => 'Tim@dec1',
    'as' => 'seis'
]);
Route::get('/dec2', [
    'uses' => 'Tim@dec2',
    'as' => 'siete'
]);
Route::get('/dec3', [
    'uses' => 'Tim@dec3',
    'as' => 'ocho'
]);
Route::get('/dec4', [
    'uses' => 'Tim@dec4',
    'as' => 'nueve'
]);
Route::get('/dec5', [
    'uses' => 'Tim@dec5',
    'as' => 'diez'
]);
Route::get('/ciclo1', [
    'uses' => 'Tim@ciclo1',
    'as' => 'once'
]);
Route::get('/ciclo2', [
    'uses' => 'Tim@ciclo2',
    'as' => 'doce'
]);
Route::get('/ciclo3', [
    'uses' => 'Tim@ciclo3',
    'as' => 'trece'
]);
Route::get ('/valida', 'Tim@validarLogin');

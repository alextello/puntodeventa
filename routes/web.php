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

Route::get('/', 'LoginController@index');
Route::get('/registro', function(){
  return view('autenticacion.registro');
});

Route::post('/registro', 'RegistroController@registro');
Route::post('/login', 'LoginController@login');
Route::get('/login', 'LoginController@loginGet');
Route::get('/logout', 'LoginController@logout');
Route::get('/dashboard', 'MainController@dashboard');
Route::resource('usuarios', 'CRUDusers');

Route::resource('user', 'UserController');
Route::post('login', 'LoginController@login')->middleware('web');
Route::get('/logout', 'LoginController@logout');
Route::get('/send', 'LoginController@send');

Route::get('formpickers', function(){
  return view('form-pickers');
});

Route::get('prueba', function(){
  return view('prueba');
});


Route::middleware(['autenticado'])->group(function () {
  Route::resource('pacientes', 'PacientesController');
  Route::post('registro', 'RegistroController@registro');
  Route::resource('citas', 'CitasController');
  Route::resource('Ncita', 'NCitaController');
  Route::get('citas-hoy', 'AdminController@citasHoy');
  Route::get('citas-por-fecha', 'AdminController@citasFecha');
  Route::get('culminar-citas', 'AdminController@culminarCita');
  Route::post('novino', 'AdminController@noVino');
  Route::post('citas-por-fecha', 'AdminController@citasFechaPost')->name('citas-por-fecha');
  Route::resource('servicio', 'ServicioController');
});

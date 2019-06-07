<?php
use App\UserITSZO;
use App\Acceso;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource("usuarios","UsuariosController");
Route::resource("registros","RegistrosController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'UsuariosController@index')->name('Usuarios');
Route::get('/registros', 'RegistrosController@index')->name('Registros');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/agregar-usuario', function () {
    return view('usuarios.agregar');
});
Route::get('/agregar-registro', function () {
    return view('registros.agregar');
});
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get("usuarios/delete/{rfid}","UsuariosController@destroy");
Route::get("registros/delete/{id}","RegistrosController@destroy");
////////////////////////////////////////////////////////////////////////////////////////////////
route::get('usuarios/{rfid}/edit', 'UsuariosController@edit');
route::get('registros/{id}/edit', 'RegistrosController@edit');
////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/export-registros', 'ExcelController@export');

<?php
use App\UserITSZO;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("usuarios","UsuariosController");

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
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get("usuarios/delete/{rfid}","UsuariosController@destroy");
Route::get("registros/delete/{id}","RegistrosController@destroy");
////////////////////////////////////////////////////////////////////////////////////////////////
route::get('usuarios/{rfid}/edit', 'UsuariosController@edit');

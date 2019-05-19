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



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  /////////////////////////////////////////////////////////////////////////////////////////////////
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/usuarios', 'UsuariosController@index')->name('Usuarios');
  Route::get('/registros', 'RegistrosController@index')->name('Registros');
  /////////////////////////////////////////////////////////////////////////////////////////////////
  Route::get('/agregar-usuario', function () {
    $datos=UserITSZO::all();
      return view('usuarios.agregar',compact('datos'));
  });
  Route::get('/agregar-registro', 'RegistrosController@registroadd' );
  /////////////////////////////////////////////////////////////////////////////////////////////////
  Route::get("/agregar-registro/escanear/{rfid}","RegistrosController@escanear");
  Route::get("/salida/{id}","RegistrosController@salida");
  /////////////////////////////////////////////////////////////////////////////////////////////////
  Route::get("usuarios/delete/{rfid}","UsuariosController@destroy");
  Route::get("registros/delete/{id}","RegistrosController@destroy");
  ////////////////////////////////////////////////////////////////////////////////////////////////
  route::get('usuarios/{rfid}/edit', 'UsuariosController@edit');
  route::get('registros/{id}/edit', 'RegistrosController@edit');
  ////////////////////////////////////////////////////////////////////////////////////////////////
  Route::get('/export-registros', 'ExcelController@export');
});

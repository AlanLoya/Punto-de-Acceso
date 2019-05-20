<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserITSZO;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class UsuariosController extends Controller
{

     public function scopeDone($query) {
      return $query->where('done', false);
     }

    public function index(Request $request)
    {
      $usuario=UserITSZO::nombre($request->get('nombre'))->paginate(20);
        return view('usuarios', compact('usuario'));
    }

    public function show()
    {
      //
    }

    public function usuarioadd()
    {
      $reg = UserITSZO::all()->first();
      return view('usuarios.agregar', compact('reg'));
    }

    public function escanear($rfid)
    {
      $arg=0;
      $output = exec('python "/public/argon/RFID/MFRC522-python-master/Read.py" "'.$arg.'"');
      $usuario=UserITSZO::find($output);
      return view('usuarios.agregar-usuario',compact('usuario'));
    }

    public function store(Request $request)
      {
        $registro=new UserITSZO();
          $registro->rfid = $request->input('rfid');
          $registro->no_control = $request->input('no_control');
          $registro->nombre = $request->input('nombre');
          $registro->apellido = $request->input('apellido');
          $registro->apellido1 = $request->input('apellido1');
          $registro->tipo = $request->input('tipo');
          $registro->carrera = $request->input('carrera');
        $registro->save();
        return redirect()->action('UsuariosController@index');
      }

    public function edit($rfid)
    {
      $usuario = UserITSZO::find($rfid);
      return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $rfid)
    {
      $usuario= UserITSZO::find($rfid);
      $usuario->rfid = $request->input('rfid');
      $usuario->no_control = $request->input('no_control');
      $usuario->nombre = $request->input('nombre');
      $usuario->apellido = $request->input('apellido');
      $usuario->apellido1 = $request->input('apellido1');
      $usuario->tipo = $request->input('tipo');
      $usuario->carrera = $request->input('carrera');
      $usuario->save();
      return redirect()->action('UsuariosController@index');
    }

     public function destroy($rfid)
     {
       $usuarios=UserITSZO::find($rfid);
       if ($usuarios->delete($rfid)){
         return redirect("usuarios/");
       }
       else return "El ".$rfid."No se pudo borrar";
     }
}

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
      //$output = 32;
      $usuario=UserITSZO::find($output);
      return view('usuarios.agregar-usuario',compact('usuario','output'));
    }

    public function store(Request $request)
      {
        try {
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
        catch (QueryException $e) {
          return ("RFID Duplicado");
        }
      }

    public function edit($no_control)
    {
      $usuario = UserITSZO::find($no_control);
      return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $no_control)
    {
      $usuario= UserITSZO::find($no_control);
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

     public function destroy($no_control)
     {
       $usuarios=UserITSZO::find($no_control);
       if ($usuarios->delete($no_control)){
         return redirect("usuarios/");
       }
       else return "El ".$no_control."No se pudo borrar";
     }
}

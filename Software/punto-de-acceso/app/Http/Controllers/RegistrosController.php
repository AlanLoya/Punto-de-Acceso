<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Acceso;
use App\UserITSZO;
use Carbon\Carbon;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RegistrosController extends Controller{

     public function scopeDone($query)
     {
      return $query->where('done', false);
     }

     public function scopeUsr(Request $request ,$rfid)
     {
       $usuario = UserITSZO::where('rfid','=', $rfid)->get();

     }

     public function registroadd()
     {
       $reg = UserITSZO::all()->first();
       return view('registros.agregar', compact('reg'));
     }

     public function escanear($rfid)
     {
       $arg=0;
       $output = exec('python "/public/argon/RFID/MFRC522-python-master/Read.py" "'.$arg.'"');
       //$output = 11121314;
       if (empty($output)) {
         return ("Error");
       }
       else {
         $usuario=UserITSZO::find($output);
         return view('registros.agregar-registro',compact('usuario'));
       }

     }

     public function salida(Request $request, $id)
     {
       $salida=Acceso:: find($id);
       //return strtotime($salida->entrada);
       $salida->salida=now();
       $salida->uso=date(strtotime($salida->salida) - strtotime($salida->entrada));
       $salida->save();
       return redirect()->action('RegistrosController@index');

     }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function index(Request $request)
    {
      $registro=Acceso::nombre($request->get('nombre'))->paginate(20);
        return view('registros', compact('registro','usuario'));
    }

    public function store(Request $request)
    {
      $registro=new Acceso();
        $registro->rfid = $request->input('rfid');
        $registro->no_control = $request->input('no_control');
        $registro->nombre = $request->input('nombre');
        $registro->apellido = $request->input('apellido');
        $registro->apellido1 = $request->input('apellido1');
        $registro->carrera = $request->input('carrera');
        $registro->tipo = $request->input('tipo');
        $registro->materia = $request->input('opt');
        $registro->actividad = $request->input('actividad');
        $registro->entrada = now();
        $registro->ubicacion = $request->input('ubicacion');
      $registro->save();

      return redirect()->action('RegistrosController@index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $registro = Acceso::find($id);
      return view('registros.edit', compact('registro'));
    }

    public function update(Request $request, $id)
    {
      $registro= Acceso::find($id);
      $registro->rfid = $request->input('rfid');
      $registro->no_control = $request->input('no_control');
      $registro->nombre = $request->input('nombre');
      $registro->apellido = $request->input('apellido');
      $registro->apellido1 = $request->input('apellido1');
      $registro->carrera = $request->input('carrera');
      $registro->tipo = $request->input('tipo');
      $registro->materia = $request->input('opt');
      $registro->actividad = $request->input('actividad');
      $registro->entrada = $request->input('entrada');
      $registro->salida = $request->input('salida');
      $registro->ubicacion = $request->input('ubicacion');
      $registro->save();
      return redirect()->action('RegistrosController@index');
    }

     public function destroy($id)
     {
       $registro=Acceso::find($id);
       if ($registro->delete($id)){
         return redirect("registros/");
       }
       else return "El ".$id."No se pudo borrar";
     }
}

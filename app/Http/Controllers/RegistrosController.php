<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Acceso;
use App\UserITSZO;

class RegistrosController extends Controller{

     public function scopeDone($query)
     {
      return $query->where('done', false);
     }

     public function scopeUsr(Request $request ,$rfid)
     {
       $usuario = UserITSZO::where('rfid','=', $rfid)->get();

     }


    public function index(Request $request)
    {
      $registro=Acceso::nombre($request->get('nombre'))->paginate(20);
        return view('registros', compact('registro','usuario'));
    }

    public function store(Request $request)
    {
        //
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
      $registro->tipo = $request->input('tipo');
      $registro->materia = $request->input('materia');
      $registro->actividad = $request->input('actividad');
      $registro->entrada = $request->input('entrada');
      $registro->salida = $request->input('salida');
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

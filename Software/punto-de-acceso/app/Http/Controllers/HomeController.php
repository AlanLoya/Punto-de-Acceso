<?php

namespace App\Http\Controllers;
use App\UserITSZO;
use App\Acceso;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
      $count=Acceso::count();
      $countCon = Acceso::where('actividad','like', '%Consulta%')->count();
      $countCla = Acceso::where('actividad','like', '%Clase%')->count();
      $countPra = Acceso::where('actividad','like', '%Practica%')->count();
      $count1=UserITSZO::count();
      $count2 = UserITSZO::where('tipo','like', '%Docente%')->count();
      $count3 = UserITSZO::where('tipo','like', '%Alumno%')->count();
        return view('dashboard',compact('count','count1','count2','count3','countCon','countCla','countPra'));
    }
}

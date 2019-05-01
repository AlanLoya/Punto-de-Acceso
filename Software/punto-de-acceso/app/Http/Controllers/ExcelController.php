<?php
namespace App\Http\Controllers;

use App\Exports\RegistrosExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExcelController extends Controller

{
  public function export()
      {
          return Excel::download(new RegistrosExport, 'BD-Registros.xlsx');
      }
}

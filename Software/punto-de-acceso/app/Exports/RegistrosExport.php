<?php

namespace App\Exports;

use App\Acceso;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrosExport implements FromCollection,ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'RFID',
            'No. Control',
            'Nombre(s)',
            'Apellido Paterno',
            'Apellido Materno',
            'Tipo',
            'Carrera',
            'Materia',
            'Actividad',
            'Ubicación',
            'Entrada',
            'Salida',
            'Tiempo de Uso'
        ];
    }
    public function collection()
    {
        return Acceso::select('rfid','no_control','nombre','apellido','apellido1','tipo','carrera','materia','actividad','ubicacion','entrada','salida','uso')->get() ;
        //return Libros::all()->where('ubicacion', 'LIKE', "%ISC%");
    }
}

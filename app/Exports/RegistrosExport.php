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
            'Apellido(s)',
            'Tipo',
            'Carrera',
            'Materia',
            'Actividad',
            'Entrada',
            'Salida',
            'Uso'
        ];
    }
    public function collection()
    {
        return Acceso::select('rfid','no_control','nombre','apellido','tipo','carrera','materia','actividad','entrada','salida','uso')->get() ;
        //return Libros::all()->where('ubicacion', 'LIKE', "%ISC%");
    }
}

<?php

namespace App\Exports;

use App\Models\DatosPromociones;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DatosPromocionesExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return DatosPromociones::all();
    }

    public function map($datoPromocion): array
    {
        return [
            $datoPromocion->celular_dato_promocion,
            $datoPromocion->dni_dato_promocion,
            $datoPromocion->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            'Celular',
            'DNI',
            'Fecha',
        ];
    }
}

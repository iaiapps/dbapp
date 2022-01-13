<?php

namespace App\Exports;

use App\Models\ExtracurricularData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExtracurricularExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return ExtracurricularData::orderBy('extra_id','ASC')->get();
    }
    public function headings():array
    {
        return [
            'Nama',
            'Extrakurikuler',
            'Kelas',
        ];   
    }
    public function map($a): array
    {
        return [
            $a->name,
            $a->extra->name,
            $a->class->name,
        ];   
    }
}

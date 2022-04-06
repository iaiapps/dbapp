<?php

namespace App\Exports;

use App\Models\Presence;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;

class PresencesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    public function collection()
    {
        return Presence::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'id',
            'id',
            'id',
            'Email',
            'Created at',
            'Updated at'
        ];
    }
    public function registerEvents(): array
    {        
        $styleArray = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'font' => [
                'name'      =>  'Calibri',
                'size'      =>  15,
                'bold'      =>  true,
                'color' => ['rgb' => '000000'],
            ],

            //Set background style
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'cfcfcf',
                 ]           
            ],

        ];
        return [
            AfterSheet::class => function(AfterSheet $event) use ($styleArray) {
                $event->sheet->getDelegate()->getStyle('A1:W1')->applyFromArray($styleArray);
            },
        ];
    }
}

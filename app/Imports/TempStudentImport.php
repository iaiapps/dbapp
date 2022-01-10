<?php

namespace App\Imports;

use App\Models\TempStudent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

use Maatwebsite\Excel\Concerns\WithHeadingRow;


class TempStudentImport implements ToModel,WithHeadingRow
{
    use Importable;
    public function model(array $row)
    {
        return new TempStudent([
            'class_id'=>$row['class_id'],
            'name'=>$row['name'],
        ]);
    }
}

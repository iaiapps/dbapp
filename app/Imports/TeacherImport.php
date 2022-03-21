<?php

namespace App\Imports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TeacherImport implements
    ToModel,
    WithHeadingRow, 
    WithValidation,
    SkipsOnFailure
{

    use Importable, SkipsErrors, SkipsFailures;

    public function model(array $row)
    {
        return new Teacher([
            'nama'=>$row['nama'],
            'nik'=>$row['nik'],
            'jk'=>$row['jk'],
            'tempat_lahir'=>$row['tempat_lahir'],
            'tanggal_lahir'=>$row['tanggal_lahir'],
            'nama_ibu'=>$row['nama_ibu'],
            'no_hp'=>$row['no_hp'],
            'email'=>$row['email'],
            
            'alamat'=>$row['alamat'],
            'rt'=>$row['rt'],
            'rw'=>$row['rw'],
            'dusun'=>$row['dusun'],
            'kelurahan'=>$row['kelurahan'],
            'kecamatan'=>$row['kecamatan'],
            'kota'=>$row['kota'],
            'provinsi'=>$row['provinsi'],
            'kewarganegaraan'=>$row['kewarganegaraan'],
            'kode_pos'=>$row['kode_pos'],
            'lintang'=>$row['lintang'],
            'bujur'=>$row['bujur'],
            'agama'=>$row['agama'],
            'npwp'=>$row['npwp'],
            'nama_wajib_pajak'=>$row['nama_wajib_pajak'],
            'status_perkawinan'=>$row['status_perkawinan'],
            'nama_pasangan'=>$row['nama_pasangan'],    
            'pekerjaan_pasangan'=>$row['pekerjaan_pasangan'],
        ]);
    }
    public function rules():array
    {
        return[
            '*.nik'=>['unique:teachers,nik']
        ];
    }
    public function customValidationMessages()
    {
        return [
            'nik.unique' => 'Humm, Sepertinya :attribute sudah ada.',
        ];
    }
}

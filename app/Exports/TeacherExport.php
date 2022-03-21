<?php

namespace App\Exports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeacherExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Teacher::all();
    }
    public function headings():array
    {
        return[
           'nama',
           'nik',
           'jk',
           'tempat_lahir',
           'tanggal_lahir',
           'nama_ibu',
           'no_hp',
           'email',
            
           'alamat',
           'rt',
           'rw',
           'dusun',
           'kelurahan',
           'kecamatan',
           'kota',
           'provinsi',
           'kewarganegaraan',
           'kode_pos',
           'lintang',
           'bujur',
           'agama',
           'npwp',
           'nama_wajib_pajak',
           'status_perkawinan',
           'nama_pasangan',
           'pekerjaan_pasangan',
        ];
    }
    public function map($guru):array
    {
        return[
            $guru->nama,
            $guru->nik,
            $guru->jk,
            $guru->tempat_lahir,
            $guru->tanggal_lahir,
            $guru->nama_ibu,
            $guru->no_hp,
            $guru->email,

            $guru->alamat,
            $guru->rt,
            $guru->rw,
            $guru->dusun,
            $guru->kelurahan,
            $guru->kecamatan,
            $guru->kota,
            $guru->provinsi,
            $guru->kewarganegaraan,
            $guru->kode_pos,
            $guru->lintang,
            $guru->bujur,
            $guru->agama,
            $guru->npwp,
            $guru->nama_wajib_pajak,
            $guru->status_perkawinan,
            $guru->nama_pasangan,
            $guru->pekerjaan_pasangan,
        ];
    }
}

<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Student::all();
    }
    public function headings():array
    {
        return [
            'nama',
            'nipd',
            'jk',
            'nisn',
            'tempat_lahir',
            'tanggal_lahir',
            'nik',
            'agama',
            'alamat',
            'rt',
            'rw',
            'dusun',
            'kelurahan',
            'kecamatan',
            'kode_pos',
            'jenis_tinggal',
            'alat_transportasi',
            'telepon',
            'hp',
            'email',

            'nama_ayah',
            'tanggal_lahir_ayah',
            'pendidikan_ayah',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'nik_ayah',

            'nama_ibu',
            'tanggal_lahir_ibu',
            'pendidikan_ibu',
            'pekerjaan_ibu',
            'penghasilan_ibu',
            'nik_ibu',
           
            'nama_wali',
            'tanggal_lahir_wali',
            'pendidikan_wali',
            'pekerjaan_wali',
            'penghasilan_wali',
            'nik_wali',

            'rombel_saat_ini',
            'no_un',
            'no_ijazah',
            'no_kks',
            'no_akta',
            'bank',
            'no_rekening',
            'rekening_atas_nama',
            'kebutuhan_khusus',
            
            'sekolah_asal',
            'anak_ke',
            'lintang',
            'bujur',
            'no_kk',
            'berat_badan',
            'tinggi_badan',
            'lingkar_kepala',
            'jumlah_saudara_kandung',
            'jarak_rumah_ke_sekolah',

            'hp_ayah',
            'hp_ibu',
            'hp_wali',
            'kota',
            'provinsi',

            'grade_id',
        ];   
    }
     public function map($a): array
    {
        return [
            $a->nama,
            $a->nipd,
            $a->jk,
            $a->nisn,
            $a->tempat_lahir,
            $a->tanggal_lahir,
            $a->nik,
            $a->agama,
            $a->alamat,
            $a->rt,
            $a->rw,
            $a->dusun,
            $a->kelurahan,
            $a->kecamatan,
            $a->kode_pos,
            $a->jenis_tinggal,
            $a->alat_transportasi,
            $a->telepon,
            $a->hp,
            $a->email,

            $a->nama_ayah,
            $a->tanggal_lahir_ayah,
            $a->pendidikan_ayah,
            $a->pekerjaan_ayah,
            $a->penghasilan_ayah,
            $a->nik_ayah,

            $a->nama_ibu,
            $a->tanggal_lahir_ibu,
            $a->pendidikan_ibu,
            $a->pekerjaan_ibu,
            $a->penghasilan_ibu,
            $a->nik_ibu,
           
            $a->nama_wali,
            $a->tanggal_lahir_wali,
            $a->pendidikan_wali,
            $a->pekerjaan_wali,
            $a->penghasilan_wali,
            $a->nik_wali,

            $a->rombel_saat_ini,
            $a->no_un,
            $a->no_ijazah,
            $a->no_kks,
            $a->no_akta,
            $a->bank,
            $a->no_rekening,
            $a->rekening_atas_nama,
            $a->kebutuhan_khusus,
            
            $a->sekolah_asal,
            $a->anak_ke,
            $a->lintang,
            $a->bujur,
            $a->no_kk,
            $a->berat_badan,
            $a->tinggi_badan,
            $a->lingkar_kepala,
            $a->jumlah_saudara_kandung,
            $a->jarak_rumah_ke_sekolah,

            $a->hp_ayah,
            $a->hp_ibu,
            $a->hp_wali,
            $a->kota,
            $a->provinsi,

            $a->grade_id,
        ];   
    }
}

<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        return Student::all();
    }
    public function map($student): array
    {
        return [
            $student->nama,
            $student->nipd,
        ];
    }
    public function headings():array
    {
        return [
            'nama',
            'nipd',
            // 'jk',
            // 'nisn',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'nik',
            // 'agama',
            // 'alamat',
            // 'rt',
            // 'rw',
            // 'dusun',
            // 'kelurahan',
            // 'kecamatan',
            // 'kode_pos',
            // 'jenis_tinggal',
            // 'alat_transportasi',
            // 'telepon',
            // 'hp',
            // 'email',

            // 'nama_ayah',
            // 'tanggal_lahir_ayah',
            // 'pendidikan_ayah',
            // 'pekerjaan_ayah',
            // 'penghasilan_ayah',
            // 'nik_ayah',

            // 'nama_ibu',
            // 'tanggal_lahir_ibu',
            // 'pendidikan_ibu',
            // 'pekerjaan_ibu',
            // 'penghasilan_ibu',
            // 'nik_ibu',
           
            // 'nama_wali',
            // 'tanggal_lahir_wali',
            // 'pendidikan_wali',
            // 'pekerjaan_wali',
            // 'penghasilan_wali',
            // 'nik_wali',

            // 'rombel_saat_ini',
            // 'no_un',
            // 'no_ijazah',
            // 'no_kks',
            // 'no_akta',
            // 'bank',
            // 'no_rekening',
            // 'rekening_atas_nama',
            // 'kebutuhan_khusus',
            
            // 'sekolah_asal',
            // 'anak_ke',
            // 'lintang',
            // 'bujur',
            // 'no_kk',
            // 'berat_badan',
            // 'tinggi_badan',
            // 'lingkar_kepala',
            // 'jumlah_saudara_kandung',
            // 'jarak_rumah_ke_sekolah',

            // 'hp_ayah',
            // 'hp_ibu',
            // 'hp_wali',
            // 'kota',
            // 'provinsi',
        ];   
    }
}

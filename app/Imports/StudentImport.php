<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentImport implements 
    ToModel,
    WithHeadingRow, 
    WithValidation,
    SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;
    public function model(array $row)
    {
        return new Student([
            'nama'=>$row['nama'],
            'nipd'=>$row['nipd'],
            'jk'=>$row['jk'],
            'nisn'=>$row['nisn'],
            'tempat_lahir'=>$row['tempat_lahir'],
            'tanggal_lahir'=>$row['tanggal_lahir'],
            'nik'=>$row['nik'],
            'agama'=>$row['agama'],
            'alamat'=>$row['alamat'],
            'rt'=>$row['rt'],
            'rw'=>$row['rw'],
            'dusun'=>$row['dusun'],
            'kelurahan'=>$row['kelurahan'],
            'kecamatan'=>$row['kecamatan'],
            'kode_pos'=>$row['kode_pos'],
            'jenis_tinggal'=>$row['jenis_tinggal'],
            'alat_transportasi'=>$row['alat_transportasi'],
            'telepon'=>$row['telepon'],
            'hp'=>$row['hp'],
            'email'=>$row['email'],
            'nama_ayah'=>$row['nama_ayah'],
            'tanggal_lahir_ayah'=>$row['tanggal_lahir_ayah'],
            'pendidikan_ayah'=>$row['pendidikan_ayah'],
            'pekerjaan_ayah'=>$row['pekerjaan_ayah'],
            'penghasilan_ayah'=>$row['penghasilan_ayah'],
            'nik_ayah'=>$row['nik_ayah'],
            'nama_ibu'=>$row['nama_ibu'],
            'tanggal_lahir_ibu'=>$row['tanggal_lahir_ibu'],
            'pendidikan_ibu'=>$row['pendidikan_ibu'],
            'pekerjaan_ibu'=>$row['pekerjaan_ibu'],
            'penghasilan_ibu'=>$row['penghasilan_ibu'],
            'nik_ibu'=>$row['nik_ibu'],
            'nama_wali'=>$row['nama_wali'],
            'tanggal_lahir_wali'=>$row['tanggal_lahir_wali'],
            'pendidikan_wali'=>$row['pendidikan_wali'],
            'pekerjaan_wali'=>$row['pekerjaan_wali'],
            'penghasilan_wali'=>$row['penghasilan_wali'],
            'nik_wali'=>$row['nik_wali'],
            'rombel_saat_ini'=>$row['rombel_saat_ini'],
            'no_un'=>$row['no_un'],
            'no_ijazah'=>$row['no_ijazah'],
            'no_kks'=>$row['no_kks'],
            'no_akta'=>$row['no_akta'],
            'bank'=>$row['bank'],
            'no_rekening'=>$row['no_rekening'],
            'rekening_atas_nama'=>$row['rekening_atas_nama'],
            'kebutuhan_khusus'=>$row['kebutuhan_khusus'],
            'sekolah_asal'=>$row['sekolah_asal'],
            'anak_ke'=>$row['anak_ke'],
            'lintang'=>$row['lintang'],
            'bujur'=>$row['bujur'],
            'no_kk'=>$row['no_kk'],
            'berat_badan'=>$row['berat_badan'],
            'tinggi_badan'=>$row['tinggi_badan'],
            'lingkar_kepala'=>$row['lingkar_kepala'],
            'jumlah_saudara_kandung'=>$row['jumlah_saudara_kandung'],
            'jarak_rumah_ke_sekolah'=>$row['jarak_rumah_ke_sekolah'],
            'hp_ayah'=>$row['hp_ayah'],
            'hp_ibu'=>$row['hp_ibu'],
            'hp_wali'=>$row['hp_wali'],
            'kota'=>$row['kota'],
            'provinsi'=>$row['provinsi'],
            'grade_id'=>$row['grade_id'],
        ]);
    }
    public function rules():array
    {
        return[
            '*.nisn'=>['unique:students,nisn']
        ];
    }
    public function customValidationMessages()
    {
        return [
            'nisn.unique' => ' :attribute sudah ada.',
        ];
    }
}

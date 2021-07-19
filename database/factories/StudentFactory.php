<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    
    public function definition()
    {
        return [
            // 'email'=>$this->faker->unique()->safeEmail,
            'nama'=>$this->faker->name,
            'nipd'=>$this->faker->numberBetween($min = 700, $max = 9000),
            'jk'=>$this->faker->randomElement($array = array ('P','L')),
            'nisn'=>$this->faker->numberBetween($min = 700, $max = 9000),
            'tempat_lahir'=>$this->faker->name,
            'tanggal_lahir'=>$this->faker->name,
            'nik'=>$this->faker->numberBetween($min = 700, $max = 9000),
            'agama'=>$this->faker->randomElement($array = array ('Islam','Kristen')),
            'alamat'=>$this->faker->streetName,
            'rt'=>$this->faker->randomDigitNotNull,
            'rw'=>$this->faker->randomDigitNotNull,
            'dusun'=>$this->faker->cityPrefix,
            'kelurahan'=>$this->faker->cityPrefix,
            'kecamatan'=>$this->faker->cityPrefix,
            'kode_pos'=>$this->faker->numberBetween($min = 10000, $max = 99999),
            'jenis_tinggal'=>$this->faker->name,
            'alat_transportasi'=>$this->faker->name,
            'telepon'=>$this->faker->e164PhoneNumber,
            'hp'=>$this->faker->e164PhoneNumber,
            'email'=>$this->faker->name,
            'skhun'=>$this->faker->name,
            'penerima_kps'=>$this->faker->name,
            'no_kps'=>$this->faker->name,

            'nama_ayah'=>$this->faker->name,
            'tanggal_lahir_ayah'=>$this->faker->name,
            'pendidikan_ayah'=>$this->faker->name,
            'pekerjaan_ayah'=>$this->faker->name,
            'penghasilan_ayah'=>$this->faker->name,
            'nik_ayah'=>$this->faker->name,

            'nama_ibu'=>$this->faker->name,
            'tanggal_lahir_ibu'=>$this->faker->name,
            'pendidikan_ibu'=>$this->faker->name,
            'pekerjaan_ibu'=>$this->faker->name,
            'penghasilan_ibu'=>$this->faker->name,
            'nik_ibu'=>$this->faker->name,
           
            'nama_wali'=>$this->faker->name,
            'tanggal_lahir_wali'=>$this->faker->name,
            'pendidikan_wali'=>$this->faker->name,
            'pekerjaan_wali'=>$this->faker->name,
            'penghasilan_wali'=>$this->faker->name,
            'nik_wali'=>$this->faker->name,

            'rombel_saat_ini'=>$this->faker->name,
            'no_un'=>$this->faker->name,
            'no_ijazah'=>$this->faker->name,
            'penerima_kip'=>$this->faker->name,
            'no_kip'=>$this->faker->name,
            'no_kks'=>$this->faker->name,
            'no_akta'=>$this->faker->name,
            'bank'=>$this->faker->name,
            'no_rekening'=>$this->faker->name,
            'rekening_atas_nama'=>$this->faker->name,
            'layak_pip'=>$this->faker->name,
            'alasan_layak_pip'=>$this->faker->name,
            'kebutuhan_khusus'=>$this->faker->name,
            
            'sekolah_asal'=>$this->faker->name,
            'anak_ke'=>$this->faker->name,
            'lintang'=>$this->faker->name,
            'bujur'=>$this->faker->name,
            'no_kk'=>$this->faker->name,
            'berat_badan'=>$this->faker->name,
            'tinggi_badan'=>$this->faker->name,
            'lingkar_kepala'=>$this->faker->name,
            'jumlah_saudara_kandung'=>$this->faker->name,
            'jarak_rumah_ke_sekolah'=>$this->faker->name,

            'hp_ayah'=>$this->faker->e164PhoneNumber,
            'hp_ibu'=>$this->faker->e164PhoneNumber,
            'hp_wali'=>$this->faker->e164PhoneNumber,
            'kota'=>$this->faker->city,
            'provinsi'=>$this->faker->city,

            'grade_id'=>1
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->name(),
            'nik'=>$this->faker->numberBetween($min = 700, $max = 9000),
            'jk'=>$this->faker->name(),
            'tempat_lahir'=>$this->faker->name(),
            'tanggal_lahir'=>$this->faker->name(),
            'nama_ibu'=>$this->faker->name(),
            'no_hp'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail,
            'alamat'=>$this->faker->name(),
            'rt'=>$this->faker->randomDigitNotNull,
            'rw'=>$this->faker->randomDigitNotNull,
            'dusun'=>$this->faker->cityPrefix,
            'kelurahan'=>$this->faker->cityPrefix,
            'kecamatan'=>$this->faker->cityPrefix,
            'kota'=>$this->faker->cityPrefix,
            'provinsi'=>$this->faker->cityPrefix,
            'kode_pos'=>$this->faker->numberBetween($min = 700, $max = 9000),
            'lintang'=>$this->faker->name(),
            'bujur'=>$this->faker->name(),
            'agama'=>$this->faker->name(),
            'npwp'=>$this->faker->name(),
            'nama_wajib_pajak'=>$this->faker->name(),
            'kewarganegaraan'=>$this->faker->name(),
            'status_perkawinan'=>$this->faker->name(),
            'nama_pasangan'=>$this->faker->name(),
            'pekerjaan_pasangan'=>$this->faker->name(),
          
        ];
    }
}

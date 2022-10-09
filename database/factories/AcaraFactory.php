<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_acara_id' => rand(1, 5),
            'nama_acara' => $this->faker->name(),
            'untuk_tanggal' => $this->faker->date(),
            'catatan' => 'tidak ada catatan',
            'is_active' => true,
        ];
    }
}

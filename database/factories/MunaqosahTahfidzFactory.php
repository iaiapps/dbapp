<?php

namespace Database\Factories;

use App\Models\MunaqosahTahfidz;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunaqosahTahfidzFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MunaqosahTahfidz::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'class_id'=>$this->faker->numberBetween($min = 1, $max = 24),
            'recommended_by'=>$this->faker->name(),
            'juz'=>$this->faker->numberBetween($min = 1, $max = 30),
            'exam_status'=>$this->faker->randomElement(['baru' ,'remidi']),
            'register_date'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'exam_date'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'kelancaran'=>$this->faker->numberBetween($min = 60, $max = 100),
            'fasohah_makhroj'=>$this->faker->numberBetween($min = 60, $max = 100),
            'tajwid'=>$this->faker->numberBetween($min = 60, $max = 100),
            'grade'=>$this->faker->randomElement($array = array ('a','b','c',)),
            'results'=>$this->faker->randomElement(['Lulus' ,'Remidi']),
            'examiner'=>$this->faker->name(),
        ];
    }
}

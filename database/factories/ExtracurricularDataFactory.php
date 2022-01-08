<?php

namespace Database\Factories;

use App\Models\ExtracurricularData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtracurricularDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExtracurricularData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'extra_id'=>$this->faker->randomDigitNotNull,
            'class_id'=>$this->faker->randomDigitNotNull,
            'student_id'=>$this->faker->randomDigitNotNull,
            'name'=>$this->faker->name,

        ];
    }
}

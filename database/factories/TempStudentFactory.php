<?php

namespace Database\Factories;

use App\Models\TempStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

class TempStudentFactory extends Factory
{
   
    protected $model = TempStudent::class;

    public function definition()
    {
        return [
            'class_id'=>$this->faker->randomDigitNotNull,
            'name'=>$this->faker->name
        ];
    }
}

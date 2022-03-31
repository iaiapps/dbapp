<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\Presence;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Presence::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $maxId = Teacher::max('id');
        $events = $this->faker->dateTimeBetween('-30 days', '+30 days');
        return [
            'teacher_id'=>$this->faker->numberBetween(1, $maxId),
            'date'=>$events->format('d/m/Y'),
            'time_in'=>$events->format('H:i:s'),
            'time_out'=>$events->format('H:i:s'),
            'is_late'=>$this->faker->randomElement(['tepat waktu', 'telat','izin','sakit']),
        ];
    }
}

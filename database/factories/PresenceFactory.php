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

   
    public function definition()
    {
        $maxId = Teacher::max('id');
        $events = $this->faker->dateTimeBetween('-30 days', '+30 days');
        return [
            'teacher_id'=>Teacher::factory()->create()->id,
            'date'=>$events->format('d/m/y'),
            'time_in'=>$events->format('H:i:s'),
            'time_out'=>$events->format('H:i:s'),
            'is_late'=>$this->faker->boolean(),
            'note'=>$this->faker->randomElement(['tepat waktu', 'telat','izin','sakit']),
        ];
    }
}

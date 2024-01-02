<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'sid' => $this->faker->uuid(),
            'dokter_id' => $this->faker->numberBetween(1, 5),
            'tanggal' => $this->faker->dateTimeBetween('now', '+7 days'),
            'kuota' => 5,
        ];
    }
}

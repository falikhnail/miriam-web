<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PasienVaksin>
 */
class PasienVaksinFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'nik_anak' => $this->faker->regexify('[0-9]{16}'),
            'nama_lengkap_anak' => $this->faker->name(),
            'tempat_tanggal_lahir_anak' => 'Bogor',
            'nama_orang_tua' => $this->faker->name(),
            'no_hp' => $this->faker->regexify('[0-9]{11}'),
            'alamat' => $this->faker->address(),
            'vaksin' => $this->faker->lexify(),
            'schedule' => $this->faker->date(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(), //menghasilkan nama acak
            'nim' => $this->faker->unique()->numerify('#########'), //menghasilkan 8 digit kode unik
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Sipil']), //
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

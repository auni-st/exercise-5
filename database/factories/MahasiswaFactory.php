<?php

namespace Database\Factories;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "nama" => $this ->faker->name(),
            "nim" => $this ->faker->numberBetween(0, 100),
            "jurusan_id"=> Jurusan:: all()->random()->id,
            "jenis_kelamin" => $this ->faker->randomElement(["Laki-laki", "Perempuan"]),
            "alamat" => $this ->faker->address(),
            "no_telp" => $this ->faker->phoneNumber(),
        ];
    }
}

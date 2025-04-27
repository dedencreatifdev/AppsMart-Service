<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LevelPermision>
 */
class LevelPermisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => 'User',
            'lihat' => 0,
            'tambah' => 0,
            'edit' => 0,
            'hapus' => 0,
        ];
    }
}

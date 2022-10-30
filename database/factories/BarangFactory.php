<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'foto' => $this->faker->randomElement(['https://picsum.photos/100/100', 'https://picsum.photos/100/100', 'https://picsum.photos/100/100']),
            'nama_barang' => $this->faker->sentence(),
            'harga_asli' => $this->faker->randomNumber(5, true),
            'harga_jual' => $this->faker->randomNumber(5, true),
            'stok' => $this->faker->randomNumber(5, false),
            'barcode' => $this->faker->bothify('???-###-???-###'),
        ];
    }
}

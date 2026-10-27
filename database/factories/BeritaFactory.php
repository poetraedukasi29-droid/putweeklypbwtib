<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence(mt_rand(3,8));  

        return [
            'judul' => $title,
            'slug' => Str::slug($title),
            'penulis' => $this->faker->name(),
            'konten' => $this->faker->paragraph(),
        ];
    }
}

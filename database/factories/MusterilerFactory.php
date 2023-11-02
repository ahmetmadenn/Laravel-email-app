<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Musteriler;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MusterilerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Musteriler::class;
    public function definition(): array
    {
        return [
            'adsoyad' => $this->faker->name(),
            'mail' => $this->faker->unique()->safeEmail(),
            'telefon' => $this->faker->phoneNumber(),

        ];
    }
}

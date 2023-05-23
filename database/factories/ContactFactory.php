<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ContactFactory extends Factory
{
    protected $model = \App\Models\Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'family' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone-number' => $this->faker->randomDigit(),
            'message' => $this->faker->text(255),
        ];
    }
}

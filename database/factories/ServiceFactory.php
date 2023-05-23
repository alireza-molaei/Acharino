<?php

namespace Database\Factories;

use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = service::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->name(),
            'description' => $this->faker->realText(),
            'url' => $this->faker->url(),
            'thumbnail' => $this->faker->imageUrl(359.95, 224, 'industrial', true),
        ];
    }
}

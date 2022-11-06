<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Status::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'identifier' => strtolower(str()->random(32)),
            'body' => $this->faker->sentence(),
        ];
    }
}

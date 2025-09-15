<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(rand(3,5)), //->menghasilkan sentence/kalimat random sebanyak 3-5 kalimat
            'description'=>$this->faker->paragraph(rand(1,2)), //->menghasilkan paragraf random sebanyak 1-2 paragraf
            'is_completed'=>$this->faker->boolean(20), //->menghasilkan boolean dengan kemungkinan 20% untuk true
            'user_id' => User::factory()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            return [
 'user_id' => App\Models\User::all()->random()->id,
 'title' => $faker->sentence,
 'body' => $faker->paragraph(random_int(3, 5))
 ];
        ];
    }
}

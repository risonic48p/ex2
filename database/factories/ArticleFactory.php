<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     *
     * @var string
     */
    protected $model = Article::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'brief' => $this->faker->text(500),
            'fulltext' => $this->faker->text(4500),
            'created_at' => now(),
        ];
    }
}

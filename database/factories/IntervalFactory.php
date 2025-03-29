<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Interval;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interval>
 */
class IntervalFactory extends Factory
{
    /**
     *
     * @var string
     */
    protected $model = Interval::class;

    public function generateRandomSegment(): array
    {
        $min = 0;
        $max = 1000;
        $tmpVals = [$this->faker->numberBetween($min, $max), $this->faker->numberBetween($min, $max)];
        sort($tmpVals);
        return $tmpVals;
    }


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $segment = $this->generateRandomSegment();
        return [
            'start' => $segment[0],
            'end' => $segment[1]
        ];
    }
}

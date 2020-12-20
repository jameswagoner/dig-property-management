<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_id' => Property::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'priority' => Arr::random(['low', 'normal', 'high', 'emergency']),
            'status' => Arr::random(['new', 'in-progress', 'completed'])
        ];
    }

    public function priority($priority)
    {
        $this->state(function (array $attributes) use ($priority) {
            return [
                'priority' => $priority
            ];
        });
    }

    public function status($status)
    {
        $this->state(function (array $attributes) use ($status) {
            return [
                'status' => $status
            ];
        });
    }
}
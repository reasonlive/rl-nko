<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_name' => $this->faker->name(),
        'parent_age' => $this->faker->randomDigit(),
        'parent_sex' => $this->faker->boolean(),
        'child_name' => $this->faker->name(),
        'child_age' => $this->faker->randomDigit(2),
        'child_sex' => $this->faker->boolean(),
        'issue' => $this->faker->text(),
        'email' => $this->faker->email(),
        'phone' => $this->faker->phoneNumber(),
        'created_at' => $this->faker->datetime()
        
        ];
    }
}

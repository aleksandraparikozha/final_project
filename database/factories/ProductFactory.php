<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'code'=>$this->faker->sentence,
            'price' => $this->faker->randomDigit,
            'category_id' => $this->faker->randomDigit,
            'description' => $this->faker->sentence,
        ];
    }
}

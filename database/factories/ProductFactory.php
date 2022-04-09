<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $product = Product::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->text(10),
            'price'=>rand(100,200),
        ];
    }
}

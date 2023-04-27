<?php

namespace Database\Factories;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Product::class;
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
        ];
    }
}

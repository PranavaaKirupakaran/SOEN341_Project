<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
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
            'name' => $this->faker->text(10),
            'slug' => $this->faker->slug(),
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,300),
            'stock_status' => 'in stock',
            'quantity' => $this->faker->numberBetween(100,300),
            'image' => 'clothes_' . $this->faker->unique()->numberBetween(1,30) . '.png',
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}

    /*
     public function definition()
    {
        $product_name = $this->fake->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,300),
            'stock_status' => 'in stock',
            'quantity' => $this->faker->numberBetween(100,300),
            'image' => 'clothes_' . $this->faker->unique()->numberBetween(1,30) . '.png',
            'category_id' => $this->faker->numberBetween(1,4),
        ];
    }
    */

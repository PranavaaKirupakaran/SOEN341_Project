<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $product_name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'discription' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10, 300),
            'SKU' => 'DIGI' . $this->faker->numberBetween(100, 500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100, 300),
            'image' => 'clothes_' . $this->faker->unique()->numberBetween(1, 10) . '.png',
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}

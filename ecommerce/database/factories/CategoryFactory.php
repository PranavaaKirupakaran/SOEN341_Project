<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Faker\FrameworkProvider;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Category::class;

    public function definition(): array
    {
        //$category_name = $this->faker->unique()->words($nb = 2, $asText = true);
        //$slug = Str::slug($category_name);
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
        ];
    }
}

    /*
    public function definition()
    {
        $category_name = $this->fake->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($category_name);
        return [
            'name' => $category_name,
            'slug' => $slug
        ];
    }*/

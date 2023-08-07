<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $title = fake()->sentence;
    $slug = Str::slug($title, '-');

    return [
      'title'       => $title,
      'slug'        => $slug,
      'image'       => fake()->imageUrl(640, 480),
      'image_mime'  => fake()->mimeType,
      'image_size'  => fake()->numberBetween(1000, 9000),
      'description' => fake()->paragraph,
      'price'       => fake()->randomFloat(2, 1, 1000),
      'created_by'  => 1,
      'updated_by'  => 1,
    ];
  }
}

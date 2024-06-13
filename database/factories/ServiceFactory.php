<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'featured'=>rand(0,1) == 1,
            "thumbnail"=>"1716679553_banner.jpg",
            "title"=>$this->faker->sentence,
            "shortDesc"=>$this->faker->sentence,
            "slug"=>Str::slug($this->faker->sentence),
            "description"=> implode("\n\n", $this->faker->paragraphs(10))
        ];
    }
}


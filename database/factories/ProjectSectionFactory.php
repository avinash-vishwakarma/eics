<?php

namespace Database\Factories;

use App\Models\ProjectType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odal=ProjectSection>
 */
class ProjectSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence;
        return [
            "name"=>$name,
            "slug"=>Str::slug($name),
            "type_id"=>ProjectType::inRandomOrder()->first()->id
        ];
    }
}

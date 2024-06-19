<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ProjectSection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odal=Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $title = $this->faker->sentence;

        return [
            "featured" => rand(0,1),
            "slug"=>Str::slug($title),
            "section_id"=>ProjectSection::inRandomOrder()->first()->id,
            "title"=>$title,
            "description"=>$this->faker->paragraph,
            "completion_date"=>now(),
            "starting_date"=>now(),
            "client_name"=>$this->faker->word,
            "client_url"=>$this->faker->url,
            "location"=>$this->faker->word,
            "full_description"=>$this->faker->paragraph
        ];
    }
}

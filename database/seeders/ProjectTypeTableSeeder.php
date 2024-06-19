<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectType::Create([
            "name"=>"On Going porjects",
            "slug"=>Str::slug("On Going porjects"),
        ]);

        ProjectType::Create([
            "name"=>"Commissioned Projects",
            "slug"=>Str::slug("Commissioned Projects"),
        ]);
    }
}

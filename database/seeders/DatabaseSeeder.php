<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminTableSeeder;
use Database\Seeders\ProjectTableSeeder;
use Database\Seeders\ServiceTableSeeder;
use Database\Seeders\ProjectTypeTableSeeder;
use Database\Seeders\ProjectSectionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminTableSeeder::class,
            ServiceTableSeeder::class,
            ProjectTypeTableSeeder::class,
            ProjectSectionTableSeeder::class,
            ProjectTableSeeder::class
        ]);
    }
}

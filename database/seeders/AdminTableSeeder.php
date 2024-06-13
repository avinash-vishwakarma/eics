<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "name"=>"avinash vishwakarma",
            "email"=>"testemail@gmail.com",
            "password"=>Hash::make("testpassword"),
            "email_verified_at"=>now()
        ]);
    }
}

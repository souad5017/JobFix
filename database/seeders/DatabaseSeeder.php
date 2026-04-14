<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory(5)->create([
            'role' => 'client'
        ]);

        \App\Models\Professional::factory(10)->create();

        \App\Models\ServiceRequest::factory(15)->create();

        \App\Models\Favorite::factory(10)->create();
    }
}

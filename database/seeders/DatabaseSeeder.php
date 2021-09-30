<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Client::factory(300)->create();
        \App\Models\Projects::factory(500)->create();
        \App\Models\Todo::factory(500)->create();
    }
}

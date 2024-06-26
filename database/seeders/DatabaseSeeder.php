<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RandomPersonData;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        RandomPersonData::factory(2)->create();
    }
}

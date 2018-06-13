<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // Only calling 1 seeder file to try and keep things simple.
    public function run()
    {
        $this->call(AppSeeder::class);
    }
}

<?php

//use DB;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 25 random doctors that each have 25 random patients.
        factory(App\Models\User::class, 25)->create()->each(function ($u) {
            $u->patients()->saveMany(factory(App\Models\Patient::class, 25)->make());
        });

        // Create a Doctor we can use to test the UI (login with)
        $user = factory(App\Models\User::class)->create([
            'name'      => 'Dr. John Smith',
            'email'     => 'doctor@testing.com',
            'password'  => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        // Create some random patients
        $user->patients()->saveMany(factory(App\Models\Patient::class, 25)->make());
    }
}

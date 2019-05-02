<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Jaelyn Coles',
            'email' => 'jaelyncoles@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Julienne1.'),
            'admin' => 1,
            'approved_at' => now(),
            'city'=>"",
            'venue'=>false,
            'venueName'=>""
        ]);

    }
}

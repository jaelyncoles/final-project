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
            'username' => 'Jaelyn Coles',
            'email' => 'jaelyncoles@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Julienne1.'),
            'admin' => 1,
            'approved_at' => now(),
            'city'=>"Lexington",
            'venue'=>false,
            'venueName'=>""
        ]);
    }
}

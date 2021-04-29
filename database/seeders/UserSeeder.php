<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::factory()->create([
            'id' => 1,
            'name' => 'Chris',
            'email' => 'chrisganzert@icloud.com',
            'email_verified_at' => now(),

            'password' => Hash::make('Lucas2011')
        ]);

        $user2 = User::factory()->create([
            'id' => 2,
            'name' => 'Andrea',
            'email' => 'andrea-ganzert@t-online.de',
            'email_verified_at' => now(),

            'password' => Hash::make('sommer111')
        ]);
    }
}

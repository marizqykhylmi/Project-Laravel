<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

            $this->call(UserSeeder::class);

            for ($i = 0; $i < 10; $i++) {
                User::create([
                    'name' => 'User ' . $i,
                    'email' => 'user' . $i . '@example.com',
                    'password' => Hash::make('password'),
                    'remember_token' => Str::random(10),
        ]);
    }
}
}

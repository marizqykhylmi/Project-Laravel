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

        User::create([
            'name' => 'Admin User', // Benar: 'name' adalah string
            'email' => 'admin@example.com', // Benar: 'email' adalah string
            'password' => Hash::make('password'), // Benar: 'password' adalah string
        ]);

    }
}

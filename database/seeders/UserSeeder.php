<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'Three Dog night',
            'email' => 'three@mail.ru',
            'password' => Hash::make('123123'),
        ]);

        User::factory()->create([
            'username' => 'tata',
            'email' => 'tata@mail.ru',
            'password' => Hash::make('123123'),
        ]);

        User::factory(10)->create();
    }
}

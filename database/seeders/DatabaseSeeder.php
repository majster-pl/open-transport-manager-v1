<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'dispatch1',
            'email' => 'dispatch1@otm.org',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'receiving1',
            'email' => 'receiving1@otm.org',
            'password' => Hash::make('password')
        ]);

        User::factory()->create([
            'name' => 'transport1',
            'email' => 'transport1@otm.org',
            'password' => Hash::make('password')
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => 'password'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Staff',
            'username' => 'staff',
            'password' => 'password'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Clerk',
            'username' => 'clerk',
            'password' => 'password'
        ]);
    }
}

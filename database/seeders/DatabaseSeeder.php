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
        $this->call(LaratrustSeeder::class);
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'kevin Dexter',
             'email' => 'kevintchinda65@gmail.com',
             'password' => '12345678',
         ]);
    }
}

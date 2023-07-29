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
        $this->call([
            PositionSeeder::class,
            AdminSeeder::class,
            JadwalSeeder::class,
            BimbinganSeeder::class,
            UserSeeder::class
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'code' => 'PGJ',
                'name' => 'Pengajar',
                'description' => 'Pengajar'
            ],
            [
                'code' => 'PJL',
                'name' => 'Pelajar',
                'description' => 'Pelajar'
            ],
        ]);
        // Position::factory()->count(2)->create();
    }
}

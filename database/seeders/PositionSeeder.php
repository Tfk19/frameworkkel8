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
                'code' => 'PLJ',
                'name' => 'Pelajar',
                'description' => 'Seorang Pelajar'
            ],
            [
                'code' => 'PNJ',
                'name' => 'Pengajar',
                'description' => 'Seorang Pengajar'
            ],
            [
                'code' => 'ADM',
                'name' => 'Admin',
                'description' => 'Seorang Admin'
            ],
        ]);

        // Position::factory()->count(5)->create();

    }
}

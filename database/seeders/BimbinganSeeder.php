<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BimbinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bimbingans')->insert([
            [
                'nama' => 'Taufik',
                'umur' => '21',
                'domisili' => 'Sidoarjo',
                'jadwal_id' => 1
            ],

        ]);
    }
}

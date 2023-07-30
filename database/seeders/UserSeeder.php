<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password' => bcrypt('adminadmin'),
                'no-hp' => '1234',
                'positions_id' => 3
            ],
            [
                'name' => 'Pelajar',
                'email' => 'pelajar@pelajar',
                'password' => bcrypt('pelajarpelajar'),
                'no-hp' => '1234',
                'positions_id' => 1
            ],
            [
                'name' => 'Pengajar',
                'email' => 'pengajarr@pengajar',
                'password' => bcrypt('pengajarpengajar'),
                'no-hp' => '1234',
                'positions_id' => 2
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
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
                'role' => 'admin'
            ],
            [
                'name' => 'Pelajar',
                'email' => 'pelajar@pelajar',
                'password' => bcrypt('pelajarpelajar'),
                'role' => 'pelajar'
            ],
            [
                'name' => 'Pengajar',
                'email' => 'pengajarr@pengajar',
                'password' => bcrypt('pengajarpengajar'),
                'role' => 'pengajar'
            ],
            [
                'name' => 'Ust Abdul Somad',
                'email' => 'somad@somad',
                'password' => bcrypt('somadsomad'),
                'role' => 'pengajar'
            ],
            [
                'name' => 'Ust Hannan Attaki',
                'email' => 'hannan@hannan',
                'password' => bcrypt('hannanhannan'),
                'role' => 'pengajar'
            ],
            [
                'name' => 'Ust Adi Hidayat',
                'email' => 'adi@adi',
                'password' => bcrypt('adiadi123'),
                'role' => 'pengajar'
            ],
        ]);
    }
}

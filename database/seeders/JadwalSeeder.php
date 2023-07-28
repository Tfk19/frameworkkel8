<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwals')->insert([
            [
                'methodbimbingan' => 'Offline',
                'waktubimbingan' => 'Pagi',
                'linkwa' => ' https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA'
            ],
            [
                'methodbimbingan' => 'Offline',
                'waktubimbingan' => 'Siang',
                'linkwa' => ' https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA'
            ],
            [
                'methodbimbingan' => 'Offline',
                'waktubimbingan' => 'Malam',
                'linkwa' => ' https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA'
            ],
            [
                'methodbimbingan' => 'Online',
                'waktubimbingan' => 'Pagi',
                'linkwa' => ' https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA'
            ],
            [
                'methodbimbingan' => 'Online',
                'waktubimbingan' => 'Siang',
                'linkwa' => ' https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA'
            ],
            [
                'methodbimbingan' => 'Online',
                'waktubimbingan' => 'Malam',
                'linkwa' => ' https://chat.whatsapp.com/C9l0JyAlF28FXMogbQ7nDA'
            ],
        ]);
    }
}

